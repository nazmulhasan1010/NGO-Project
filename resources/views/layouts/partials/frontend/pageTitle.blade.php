<!-- page title -->
<div class="row bg-dark-cu page-title">
    <div class="col-md-12 page-titles">
        @php
            $current = explode('/',$_SERVER['REQUEST_URI']);
            $backUri = explode('/',$_SERVER['HTTP_REFERER']);

            if (is_numeric($current[count($current)-1])==1){
               $cuName = $current[ count($current)-2];
               $uri = $current[ count($current)-2].'/'.$current[count($current)-1];
            }else{
               $cuName = is_numeric($current[count($current)-1]);
               $uri = $current[ count($current)-1];
            }

            if (is_numeric($backUri[count($backUri)-1])==1){
                $bacName = $backUri[ count($backUri)-2];
               $back = $backUri[ count($backUri)-2].'/'.$backUri[ count($backUri)-1];
            }else{
                 $bacName = $backUri[ count($backUri)-1];
                $back = $backUri[ count($backUri)-1];
            }
        @endphp
        <a href="{{url('/')}}">home</a>
        <a href="{{url('/'.$back)}}">{{$bacName}}</a>
        <a href="{{url('/'.$uri)}}">{{$cuName}}</a>
    </div>
</div> <!-- page title end -->
