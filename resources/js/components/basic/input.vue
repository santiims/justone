<template>
    <div>
        <input :type="inputType" :maxlength="maxlength" v-model="value" @change="emit" style="width: 250px; height: 50px; padding: 15px; border: 1px solid #C7B299; color: #998675;"/>
    </div>
</template>

<script>
    export default {
        props: {
            isPassword: {
                type: Boolean,
                default: false
            },
            limit: {
                type: Number,
                default: null
            }
        },
        computed: {
            inputType() {
                return this.isPassword ? 'password' : 'textarea';
            },
            maxlength() {
                return this.limit ? this.limit : 524288;
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
