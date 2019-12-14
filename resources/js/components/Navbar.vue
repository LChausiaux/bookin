<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
               data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Home
                </a>

                <a class="navbar-item">
                    Documentation
                </a>

            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" @click="showSignUpModal = true">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" @click="showLogInModal = true">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal is-active" v-if="showSignUpModal">
            <div class="modal-background" @click="resetModals"></div>
            <div class="modal-content">
                Sign Up
            </div>
        </div>
        <div class="modal is-active" v-if="showLogInModal">
            <div class="modal-background" @click="resetModals"></div>
            <div class="modal-content">
                Log In
            </div>
        </div>
    </nav>
</template>
<script>
    export default {
        data() {
            return {
                showSignUpModal: false,
                showLogInModal: false
            }
        },
        methods: {
            resetModals() {
                this.showLogInModal = false;
                this.showSignUpModal = false;
            }
        }
    }
</script>
