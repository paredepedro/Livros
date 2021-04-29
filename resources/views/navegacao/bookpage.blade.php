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

        .text_config{
            width:
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

                
                <div class="btn-group-vertical" style=" padding: 0 26%">
                <button class="btn" type="submit" style="background-color: #f2f2f2; ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                    </svg>
                    home
                </button>
            

            
                <button class="btn" type="submit" style="background-color: #f2f2f2;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    Explore
                </button>
            

            
                <button class="btn" type="submit" style="background-color: #f2f2f2; ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                    </svg>
                    Rascunhos
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
                <div class="row" style="padding: 1%">
                    <div class="col">
                        <div style="background-color: #19191a; border-radius: 10px;">

                            <!-- Primeira row: título e tag -->
                            <div class="row" style="padding:5%">
                                <div class="col"><font color="white"><h3>A revolucao dos bichos</h1></font></div>
                                <div class="col">
                                    <font color="white" size="+3">Tag:</font>
                                    <button type="button" class="btn" style="background-color:#F96513">romance</button>
                                    <button type="button" class="btn" style="background-color:#F96513">sátira</button>
                                </div>
                            </div>
                            
                            <!-- Segunda Row: imagem do livro + Sinopse -->
                            <div class="row" >
                                <div class="col">
                                    <div style="padding-left:10%">
                                        <img src="https://th.bing.com/th/id/Rb6b043b7ecad40b476026b8712538999?rik=C5BUz2tXhqU0Xg&riu=http%3a%2f%2f3.bp.blogspot.com%2f-NF3YtnpYhqI%2fUVsb09HJs2I%2fAAAAAAAABJ8%2fhXYFC4qDkew%2fs1600%2fRevoluc_a_o%2bdos%2bbichos(2).jpg&ehk=6k0bYhIT0ww0lVg5brsq0PiXT8kHiG03X4dCnFCQ8HY%3d&risl=&pid=ImgRaw" alt="" style="height:250px; width:169px">
                                    </div>
                                </div>

                                <div class="col-8">
                                    <div style="height:250px; width:330px; background-color:#292929; margin-left:5%; padding:3%;">
                                        <font color="white" size="-1" >
                                            <p align="justify">Após anos sendo maltratados e sobrecarregados de trabalho, um grupo de animais decide tomar o controle da fazenda onde vive. Com idealismo inflamado e slogans de efeito, eles planejam criar um paraíso em que prevalecerão o progresso, a justiça e a igualdade. No entanto, a revolução toma um rumo diferente do esperado. Assim, arma-se o palco para uma das fábulas satíricas mais contundentes já escritas. George Orwell traz em "A revolução dos bichos" uma crítica mordaz sobre como o poder é capaz de corromper até mesmo a mais nobre das causas. Uma história atemporal, devastadora e mais atual do que nunca. Esta edição foi traduzida por Adalgisa Campos da Silva e prefaciada pela advogada e comentarista política Gabriela Prioli.</p>
                                        </font>
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- Terceira Row: pontuação(estrelas) + Autor-->
                            <div class="row" style="padding:10% 5% 5% 5%" >
                                <div class="col">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFCE31" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFCE31" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFCE31" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFCE31" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFCE31" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                </div>
                                <div class="col" >
                                    <font color="white" size="+3">Autor:</font>
                                    <button type="button" class="btn" style="background-color:#F96513">George Orwell</button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <b>Avaliações:</b>
                        </div>

                        <div style="background-color: #F0F0F0; border-radius: 10px;">
                            <button class="btn">
                                    <svg id="iconUser" type="submit" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                    <font size="+2">Username</font> 
                            </button>
                
                            <div>
                                <font>
                                    <p align="justify">.........................................................................................................................
                                    .........................................................................................................................
                                    .........................................................................................................................
                                    </p>
                                </font>
                            </div>
                            <div class="row">
                                <div class="col-8"></div>
                                <div class="col">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFCE31" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFCE31" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFCE31" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFCE31" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#FFCE31" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
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

                    