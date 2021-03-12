<template>

    <div class="container"> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/marks" class="nav-item nav-link">Marks</router-link>
                    <router-link to="/marks/create" class="nav-item nav-link">New Mark</router-link>
                </div>
            </div>
        </nav>

        <router-view> </router-view>
        
    </div>
</template>
 




<script>
    export default {}
</script>