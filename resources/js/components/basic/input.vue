<template>
    <div>
        <input :type="inputType" v-model="value" @change="emit"/>
    </div>
</template>

<script>
    export default {
        props: {
            isPassword: {
                type: Boolean,
                default: false
            }
        },
        computed: {
            inputType() {
                return this.isPassword ? 'password' : 'textarea';
            }
        },
        data() {
            return {
                value: ''
            };
        },
        methods: {
            emit() {
                this.$emit('valueChanged', this.value);
            }
        }
    }
</script>