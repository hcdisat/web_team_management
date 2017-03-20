<template>
    <div class="panel-home">

                <div class="panel-heading"><h5 class="center">Dashboard</h5></div>

                <div class="panel-body">
                    <a href="/"><div class="sec-icon col-xs-12 col-md-4"><img src="img/email.png" alt="">Emailings</div></a>
                    <a href="/"><div class="sec-icon col-xs-12 col-md-4"><img src="img/job.png" alt="">Tasks</div></a>
                    <a href="/"><div class="sec-icon col-xs-12 col-md-4"><img src="img/prod.png" alt="">Traffic / Ofertazos</div></a>
                </div>
            
     </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>