<!DOCTYPE html>
<html>
    <head>
        <title>NameStore</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css" rel="stylesheet" type="text/css">
        
        <style>
            
            body{
                background: #FFFFFA;
                padding-top: 20px 
            }
            .header{
                text-align: center;
                margin-bottom: 20px;
            }
            fieldset { 
                border: #515052 solid 1px;
                width: 350px;
                margin: 0 auto;
                padding: 10px;
                box-shadow: 5px 5px 5px #888888;
                background: #eee;
            }

            input[type=submit]{ 
                height: 35px;
                width: 100%
             }
            
            div.result{
                width: 330px;
                height: 45px;
            }

            div.result a>span{
                display:inline-block;
                width: 280px;
            }

            .result a, .result p{
                line-height: 45px;

            }
            .result img{display: none;}

            .result a:hover>img{
                display: inline-block;
                width: 45px;
                height: 45px;
            }
        </style>

    </head>
    <body>
    <div class="header">
        <img src="https://plusthis.com/wp-content/uploads/2016/06/plusthis-logo-1.png">
    </div>
    <fieldset>
        {{ Form::open() }}
            {{ csrf_field() }}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    There was an issue:<br />
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                {!! Form::label('Please enter your name.') !!}
                {!! Form::text('name', null, 
                    array('required', 
                          'class'=>'form-control', 
                          'placeholder'=>'Dave Lee')) !!}
                {!! Form::submit() !!}

            
    
        {{ Form::close() }}
        </fieldset>
        <br>
        <fieldset>
            <h4>Results</h4>
                @foreach($names as $name)
                    <div class="result">
                        @if($name->name == "Garrick Plaisted") 
                            <p>{{$name->name}}</p>
                        @elseif($name->name == "Dave Lee") 
                            <a><span>{{$name->name}} - Overseer</span><img src="https://plusthis.com/wp-content/uploads/2015/12/Dave.png" alt=""></a>
                        @elseif($name->name == "Todd Stoker")
                            <a><span>{{$name->name}} - Maker</span><img src="https://plusthis.com/wp-content/uploads/2015/12/Todd.png" alt=""></a>
                        @elseif($name->name == "Bryce Christiansen")
                            <a><span>{{$name->name}} - Charmer</span><img src="https://plusthis.com/wp-content/uploads/2015/12/Bryce.png" alt=""></a>
                        @elseif($name->name == "Ronnie Richmond")
                            <a><span>{{$name->name}} - The Engager</span><img src="https://plusthis.com/wp-content/uploads/2015/12/Ronnie.png" alt=""></a>
                        @elseif($name->name == "Amy Porter")
                            <a><span>{{$name->name}} - Alchemist</span><img src="https://plusthis.com/wp-content/uploads/2015/12/Amy.png" alt=""></a>
                        @elseif($name->name == "Rick Simon")
                            <a><span>{{$name->name}} - Pioneer</span><img src="https://plusthis.com/wp-content/uploads/2015/12/Rick.png" alt=""></a>
                        @elseif($name->name == "Kara Moore")
                            <a><span>{{$name->name}} - Office Glue</span><img src="https://plusthis.com/wp-content/uploads/2015/12/Kara.png" alt=""></a>
                        @elseif($name->name == "Rafaella DeSantis")
                            <a><span>{{$name->name}} - Connector</span><img src="https://plusthis.com/wp-content/uploads/2015/12/Rafaella.png" alt=""></a>
                        @else
                            <p>{{$name->name}}</p>
                        @endif
                    </div>
                @endforeach
        </fieldset>
        
    </body>
</html>
