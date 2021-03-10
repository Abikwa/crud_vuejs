<template>
    <div>

        <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 shadow" style="background-color: #d16966;">
            <span class="h4 text-white">App</span>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                Menu
            </button>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <span class="nav-link text-white" href=""><i></i> Abibi</span>
                </li>
            </ul>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #3f2e2c;">
                    <div class="sidebar-sticky pt-3">
                        <ul class="nav flex-column ">
                            <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                                <router-link
                                            class="nav-link"
                                            data-toggle="collapse"
                                            :to="{ name: 'home' }"
                                            >
                                    <span data-feather="home"></span> Acceuil
                                </router-link>
                            </li>
                            
                            <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                                <router-link
                                            class="nav-link"
                                            data-toggle="collapse"
                                            :to="{ name: 'about' }"
                                            >
                                    <span data-feather="biefcase"></span> About
                                </router-link>
                            </li>
                            
                        </ul>
                    </div>
                </nav>

                <router-view></router-view>

            </div>
        </div>

    </div>
</template>

<script>
export default {
    watch: {
        $route() {
            $("#navbarCollapse").collapse("hide");
        },
    },
};
</script>