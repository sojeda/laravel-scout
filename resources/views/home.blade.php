<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ejemplo LaravelScout') }}  | LaravelEs | Sergio Ojeda</title>

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Ejemplo LaravelScout | LaravelEs | Sergio Ojeda') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

              
            </div>
        </div>
    </nav>
    
    <section class="content">
         <div class="container">
            <div class="row">
                <div class="col-xs-6 col-lg-6 col-md-6">
                    <b>Bienvenido, a el ejemplo de Laravel Scout, puedes encontrar mas tutoriales en http://laraveles.com, mi contacto puede ser a via twitter @SergsO o en nuestro Slack</b>
                </div>
                <div class="col-xs-6 col-lg-6 col-md-6">
                     <div class="form-group">
                        <div class="input-group input-group-md">
                            <div class="icon-addon addon-md">
                                <input type="text" placeholder="¿Estas buscando algun Post?" class="form-control" v-model="query">
                            </div>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" @click="search()" v-if="!loading">Buscar!</button>
                                <button class="btn btn-default" type="button" disabled="disabled" v-if="loading">Buscando...</button>
                            </span>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="alert alert-danger" role="alert" v-if="error">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                @{{ error }}
            </div>
            <div id="posts" class="row list-group">
            <div class="item col-xs-6 col-lg-6" v-for="post in posts">
                <div class="thumbnail">
                        <img class="group list-group-image" :src="post.image" alt="@{{ post.title }}" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading text-success">@{{ post.title }}</h4>
                            <p class="group inner list-group-item-text">@{{ post.description }}</p>              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.1/vue-resource.min.js"></script>
    <script src="/js/app.js"></script>

</body>
</html>
