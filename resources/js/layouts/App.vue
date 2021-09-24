<template>
    <div class="mt-0">
    
        <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 shadow mt-0" style="background-color: rgb(0, 0, 125);">
            <span class="h4 text-white">App vue js create</span>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                Menu
            </button>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <span class="nav-link text-white font-bold" href=""><i></i> Abibi Bat</span>
                </li>
            </ul>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background:rgb(0, 0, 165)">
                    <div class="sidebar-sticky pt-3">
                        <ul class="nav flex-column ">
                            <li class="nav-item">
                                <router-link
                                            class="nav-link"
                                            data-toggle="collapse"
                                            :to="{ name: 'home' }"
                                            >
                                    <span data-feather="home"></span> Acceuil
                                </router-link>
                            </li>
                            
                            <!-- <li class="nav-item">
                                <router-link
                                            class="nav-link"
                                            data-toggle="collapse"
                                            :to="{ name: 'about' }"
                                            >
                                    <span data-feather="biefcase"></span> About
                                </router-link>
                            </li> -->

                            <li class="nav-item">
                                <router-link to="/marks" class="nav-item nav-link">Marks</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/marks/create" class="nav-item nav-link">New marks</router-link>
                            </li>
                            
                            <li class="nav-item">
                                <router-link to="/models" class="nav-item nav-link">Models</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/models/create" class="nav-item nav-link">New model</router-link>
                            </li>

                        </ul>
                    </div>
                </nav>
                <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    <router-view></router-view>
                </div>

            </div>
        </div>

    </div>
</template>

<script>
export default {
  
};
</script>