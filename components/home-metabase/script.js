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

    data() {
        return {
            bigData: 444785678,
            smallData: 758,
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
