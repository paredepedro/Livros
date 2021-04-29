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
        div{
            /* border: solid 1px white; */
        }

        /* .style-cont{
            style para o container
            padding: 0 30%;
        } */

        .user-box{
            /* style para a caixa preta localizada no cando inferior da página */
            background-color: #19191A;
            bottom: 0px;
        }

        .search-box{
            /* style para a row contendo a label de pesquisa, a logo e o fundo preto */
            background-color: #19191A;
            height: 50px;
        }

        .tranding{
            /* style para a row contendo os rankings de livro e de usuário */
            padding: 30% 20%;
        }
        input::placeholder{
            color: white;
        }

    </style>
</head>
<body>
    <div class="container" style="background-color:#f2f2f2; height: 100vh">
        <div class="row" style="height: 100vh">

            <!-- Primeira Coluna -->
            <div class="col" > 
                <!-- deixa a coluna esquerda fixa -->
                <div  class="row" style="height: 100vh">
                
                <!-- Div para separar o conteúdo da borda superior -->
                <div class="row" style="padding: 42% 0 "></div>

                
                <div class="btn-group-vertical" style=" padding: 0 26%;" >
                
                
                <button class="btn" type="submit" style="background-color: #f2f2f2; " href="home-page">
                <a href="home-page" style="color: inherit; text-decoration: none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                    </svg>
                    home
                </a>
                </button>
                

            
                <button class="btn" type="submit" style="background-color: #f2f2f2;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    Explore
                </button>
            

                
                <button class="btn" type="submit" style="background-color: #f2f2f2;">
                <a href="rascunho-criacao" style="color: inherit; text-decoration: none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                    Rascunhos
                </a>
                </button>
                

            
                <button class="btn" type="submit" style="background-color: #f2f2f2; ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    Perfil
                </button>
            
                <button class="btn" type="submit" style="background-color: #f2f2f2; ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                    </svg>
                    Config
                </button>
                </div>
                
                <!-- Div para separa os botões da margem inferior -->
                <div class="row" style="padding: 40% 0 "></div>

                
                    <div class="user-box" type="submit">
                        <div class="col">
                            <svg id="iconUser" type="submit" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg>
                        </div>
                        
                        <div class="col-3">
                            <font color="white">Username</font>
                        </div>
                        
                    </div>
                
                <!-- fecha a div do </div> -->
                </div>
            </div>

            <!-- Segunda Coluna -->
            <div class="col-md-6" style="background-color: #d9d9d9; height: 100vh">
        
                <!-- NavBar -->
                <div class="row search-box sticky-top shadow">
                    <div class="col-2" style="padding: 0.5% 5%">
                        <svg id="icon_logo" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-book-fill" viewBox="0 0 16 16">
                        <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                        </svg>
                    </div>
                    <div div class="col" style="padding: 0.5% 5%">
                        <input style="width:300px" type="text" class="form-control" id="search-bar" placeholder="Pesquisar">
                    </div>
                </div>
                

                <!-- conteúdo -->
                <div class="row" style="padding: 4%">
                    <div class="col">
                        
                        <!-- div rascunho-box -->
                        <div class="row" style="background-color: #F0F0F0; border-radius: 10px;">
                            
                            <div style="border-top-left-radius: 10px;border-top-right-radius: 10px; background-color: #19191a">
                                <div class="row">
                                    <div class="col">
                                        <!-- title -->
                                        <div class="form">                           
                                            <input type="text" id="title" style="border:none; background-color: transparent; margin:1%" placeholder="Título">
                                        </div>
                                        
                                    </div>
                                    <div class="col" style="margin:1%">
                                        <form class="form-inline">
                                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" style="background-color: #19191a; color:white">
                                                <option selected>Select Tag</option>
                                                <option value="1">Avaliaçãoo</option>
                                                <option value="2">Resenha</option>
                                                <option value="3">Recomendação</option>
                                            </select>
                                        </form>
                                    </div>
                                    <div class="col">
                                        <button class="btn" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                            </svg>
                                        </button>
                                        <button class="btn" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            
                            

                            <!-- Div conteúdo(texto) da caixa-->
                            <div>
                                <font>
                                    <p align="justify">.........................................................................................................................
                                    .........................................................................................................................
                                    .........................................................................................................................
                                    .........................................................................................................................
                                    .........................................................................................................................
                                    .........................................................................................................................
                                    .........................................................................................................................
                                    .........................................................................................................................
                                    </p>
                                </font>
                            </div>

                            <!-- Div contendo like, comentario e nome do livro -->
                            <div class="row">
                                <div class="col">
                                    <button class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                        <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                                        </svg>
                                    </button>
                                    <button class="btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="col">
                                    <center>
                                        <button class="btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"/>
                                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                            </svg>
                                            <font>Alice no País das Maravilhas</font>
                                        </button>
                                    </center>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>

                
            </div>

            <!-- Última coluna -->
            <div class="col">
                <!-- fixa a coluna da direita -->
                <div class="sticky-top">
                <div class="row tranding">
                    <div class="col">
                        <div class="row"><b>Hot Profiles</b></div>
                        <p></p>
                        <div class="row">@User111111</div>
                        <div class="row">@user222222</div>
                        <div class="row">@user333333</div>
                    </div>
                    
                </div>
                <div class="row tranding">
                    <div class="col">
                        <div class="row"><b>Book Ranking</b></div>
                        <p></p>
                        <div class="row">aaaa</div>
                        <div class="row">bbbb</div>
                        <div class="row">cccc</div>
                    </div>
                </div>
                <!-- fecha a div com o sticky -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>

                    