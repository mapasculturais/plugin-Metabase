/**
 * Vue Lifecycle
 * 1. setup
 * 2. beforeCreate
 * 3. created
 * 4. beforeMount
 * 5. mounted
 * 
 * // sempre que há modificação nos dados
 *  - beforeUpdate
 *  - updated
 * 
 * 6. beforeUnmount
 * 7. unmounted                  
 */

app.component('home-metabase', {
    template: $TEMPLATES['home-metabase'],
    
    // define os eventos que este componente emite
    // emits: ['namesDefined'],

    props: {
        classes: {
            type: [String, Array, Object],
            required: false
        },
    },
    
    setup({ slots }) {
        const hasSlot = name => !!slots[name];
        // os textos estão localizados no arquivo texts.php deste componente 
        const text = Utils.getTexts('home-metabase')
        return { text, hasSlot }
    },

    beforeCreate() { },
    created() { },

    beforeMount() { },
    mounted() {
   if(length > 30) {
            this.classes.push('mc-title--long');
        } else if (length < 20) {
            this.classes.push('mc-title--short');
        }

     },

    beforeUpdate() { },
    updated() { },

    beforeUnmount() {},
    unmounted() {},

    data() {
        return {
        
        }
    },

    computed: {
       
    },
    
    methods: {
        //  this.$emit('namesDefined', this.entity);
    },
});
