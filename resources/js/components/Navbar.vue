<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="/img/logo.png" width="112" height="28">
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
                <a class="navbar-item is-active">
                    Home
                </a>
                <a class="navbar-item">
                    Browse
                </a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" @click="showSignUpModal = true">
                            Sign up
                        </a>
                        <div v-bind:class="{ 'is-active': showLogIn }" class="dropdown">
                            <div class="dropdown-trigger">
                                <a @click="showLogIn = !showLogIn" class="button is-light">
                                    Log In
                                </a>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <input class="input" type="email" placeholder="Email">
                                    <input class="input" type="password" placeholder="Password">
                                </div>
                            </div>
                        </div>
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
    </nav>
</template>
<script>
    export default {
        data() {
            return {
                showSignUpModal: false,
                showLogIn: false
            }
        },
        methods: {
            resetModals() {
                this.showSignUpModal = false;
            }
        }
    }
</script>
