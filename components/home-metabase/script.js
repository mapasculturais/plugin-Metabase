app.component('home-metabase', {
    template: $TEMPLATES['home-metabase'],

    props: {
        classes: {
            type: [String, Array, Object],
            required: false
        },
    },

    setup({ slots }) {
        const hasSlot = name => !!slots[name];
        const text = Utils.getTexts('home-metabase')
        return { text, hasSlot }
    },

    async created() {
        const opportunityAPI = new API('opportunity');
        const opportunityQuery = Utils.parsePseudoQuery(this.initialPseudoQuery);

        await opportunityAPI.find(opportunityQuery, null, true).then(response => {
            this.opportunity.registered = response.length;

        });

        opportunityQuery['@verified'] = 1;
        await opportunityAPI.find(opportunityQuery, null, true).then(response => {
            this.opportunity.verified = response.length;

        });

        const agentAPI = new API('agent');
        const agentQuery = Utils.parsePseudoQuery(this.initialPseudoQuery);

        agentQuery['type'] = 'EQ(1)';
        await agentAPI.find(agentQuery, null, true).then(response => {
            this.agents.individual.registered = response.length;

        });

        agentQuery['type'] = 'EQ(2)';
        await agentAPI.find(agentQuery, null, true).then(response => {
            this.agents.collective.registered = response.length;

        });

        agentQuery['@verified'] = 1;
        await agentAPI.find(agentQuery, null, true).then(response => {
            this.agents.collective.verified = response.length;

        });

        const spaceAPI = new API('space');
        const spaceQuery = Utils.parsePseudoQuery(this.initialPseudoQuery);

        await spaceAPI.find(spaceQuery, null, true).then(response => {
            this.spaces.registered = response.length;

        });


        const projectAPI = new API('project');
        const projectQuery = Utils.parsePseudoQuery(this.initialPseudoQuery);
        projectQuery['@select'] = 'children';
        await projectAPI.find(projectQuery, null, true).then(response => {
            let projectChildren = 0;
            for (project of response) {
                if (project.children.length > 0) {
                    projectChildren++;
                }
            }
            this.projects.registered = response.length;
            this.projects.subProjects = projectChildren;
        });

        const eventAPI = new API('event');
        const eventQuery = Utils.parsePseudoQuery(this.initialPseudoQuery);

        await eventAPI.find(eventQuery, null, true).then(response => {
            this.events.registered = response.length;

        });

    },


    data() {
        return {
           bigData: 77777777,
            agents: {
                individual: {
                    registered: 0,
                    verified: 0,
                },
                collective: {
                    registered: 0,
                    verified: 0,
                },
            },
            spaces: {
                registered: 0,
                verified: 0,
            },
            projects: {
                registered: 0,
                verified: 0,
                subProjects: 0,
            },
            opportunity: {
                registered: 0,
                verified: 0,
            },
            events: {
                registered: 0,
                verified: 0,
            },
            pseudoQuery: $MAPAS.initialPseudoQuery || {},

        }

    },

    computed: {
        panelURl() {
            return Utils.createUrl('metabase', 'panel');
        }
    },

    methods: {
        lengthClass(text) {
            const textString = String(text);
            if (textString.length > 5) {
                return 'home-metabase__long';
            } else {
                return 'home-metabase__short';
            }
        },
    },
});
