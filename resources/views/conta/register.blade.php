<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
        body{
            font-family: 'Roboto';font-size: 22px;
        }

        /* [class*="container"]{
            border-radius: 16px;
            border: solid 1px black
        } */
        .style-border{
            border-radius: 16px;
            border: solid 1px black
        }
        div{
            /* border: solid 1px black; */
        }
        #register{
            border-radius: 16px 16px 0 0;
        }
    </style>
</head>
<body>
    
    <div class="container" >
        
        <div class="row">
            <div class="col">
                <div class="row style-border d-flex justify-content-center" style="width:400px; height:400px; margin: 5% 33%" >
                    
                    <div class="row shadow" style="background-color: black;" id="register">
                        <font color="white" class="d-flex justify-content-center">Registrar</font>
                        
                    </div>
                    <form method="POST" action="{{route('save-usuario')}}">
                    @csrf
                        <div class="row mt-5">
                            <div class="d-flex justify-content-center">
                                <label class="form-label"></label>
                                <input type="text" class="form-control" id="username" style="width:80%; height:80%" placeholder="Digite um Username" name="nickname">
                            </div>
                        </div>

                        <div class="row ">
                            <div class="d-flex justify-content-center">
                                <label class="form-label"></label>
                                <input type="email" class="form-control" id="email" style="width:80%; height:80%"placeholder="Digite um Email" name="email">
                            </div>
                        </div>

                        <div class="row ">
                            <div class="d-flex justify-content-center">
                            <label class="form-label"></label>
                            <input type="password" class="form-control" id="password" style="width:80%; height:80%" placeholder="Digite uma Senha" name="senha">
                            </div>
                        </div>

                        <div class="row ">
                            <div class="d-flex justify-content-center">
                            <label class="form-label"></label>
                            <input type="password" class="form-control" id="confirm_password" style="width:80%; height:80%" placeholder="Confirme a senha" name="confirm_senha">
                            </div>
                        </div>

                        <div class="row mt-3 d-flex justify-content-center">
                            <button class="btn" type="submit" style="background-color:#F96513; width:70%; height:70%" id="confirm">
                                <font size="+2"><b>Confirmar</b></font>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>