<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<title>Resposta Quiz </Title>
<link href="teste.css " rel="stylesheet" >
</head>

<body>

<?php




$q1 =$_POST["questao1"];
$q2 =$_POST["questao2"];
$q3 =$_POST["questao3"];
$q4 =$_POST["questao4"];
$q5 =$_POST["questao5"];
$q6 =$_POST["questao6"];
$q7 =$_POST["questao7"];
$q8 =$_POST["questao8"];
$q9 =$_POST["questao9"];
$q10 =$_POST["questao10"];




/*echo "Questao1 = ".$q1."<br><br>";
echo "Questao2 = ".$q2."<br><br>";
echo "Questao3 = ".$q3."<br><br>";
echo "Questao4 = ".$q4."<br><br>";
echo "Questao5 = ".$q5."<br><br>";
echo "Questao6 = ".$q6."<br><br>";
echo "Questao7 = ".$q7."<br><br>";
echo "Questao8 = ".$q8."<br><br>";
echo "Questao9 = ".$q9."<br><br>";
echo "Questao10 = ".$q10."<br><br>";*/

 $resposta1 = "a";
 $resposta2 = "c";
 $resposta3 = "a";
 $resposta4 = "c";
 $resposta5 = "d";
 $resposta6 = "b";
 $resposta7 = "d";
 $resposta8 = "b";
 $resposta9 = "c";
 $resposta10 = "d";
 
 $acertou = 0;
 $errou = 0;
 
 if($q1 == $resposta1)
     {
	 $acertou++;
    //echo "Questão 1 - Parabéns você acertou <br><br>";
	}
	
	   else
           {	   
       $errou++;
	   
	   //echo "Questão 1 -  A resposta está errada a alternativa correta seria letra a <br><br>";
	   
    }  
    
    

	    if($q2 == $resposta2)
 {
	 $acertou++;
    //echo "Questão 2 - Parabéns você acertou<br><br>";
	}
	   else 
	     {
		 $errou++;
		 //echo "Questão 2 - A resposta está errada a alteranativa correta seria letra c <br><br>";
 }



 	    if($q3 == $resposta3)
 {
	 $acertou++;
    //echo "Questão 3 - Parabéns você acertou<br><br>";
	}
	   else 
	     {
		 $errou++;
        // echo "Questão 3 - A resposta está errada a alteranativa correta seria letra a <br><br>";
         
 }




        if($q4 == $resposta4)
 {
        $acertou++;
    //echo "Questão 4 - Parabéns você acertou <br><br>";
}

        else
       {	   
         $errou++;
   
   //echo "Questão 4 -  A resposta está errada a alternativa correta seria letra c <br><br>";
   
}   



        if($q5 == $resposta5)
    {
	     $acertou++;
    //echo "Questão 5 - Parabéns você acertou <br><br>";
	}
	
	   else
           {	   
       $errou++;
	   
	   //echo "Questão 5 -  A resposta está errada a alternativa correta seria letra d <br><br>";
	   
    }  
    
    

        if($q6 == $resposta6)
     {
	    $acertou++;
        //echo "Questão 6 - Parabéns você acertou <br><br>";
	}
	
	   else
           {	   
       $errou++;
	   
	   //echo "Questão 6 -  A resposta está errada a alternativa correta seria letra b <br><br>";
	   
    }   



        if($q7 == $resposta7)
     {
	    $acertou++;
    //echo "Questão 7 - Parabéns você acertou <br><br>";
	}
	
	   else
           {	   
       $errou++;
	   
	   //echo "Questão 7 -  A resposta está errada a alternativa correta seria letra d <br><br>";
	   
    }  
    
    


        if($q8 == $resposta8)
     {
	    $acertou++;
    //echo "Questão 8 - Parabéns você acertou <br><br>";
	}
	
	   else
           {	   
       $errou++;
	   
	   //echo "Questão 8 -  A resposta está errada a alternativa correta seria letra b <br><br>";
	   
    }  
    
    

        if($q9 == $resposta9)
     {
	    $acertou++;
    //echo "Questão 9 - Parabéns você acertou <br><br>";
	}
	
	   else
           {	   
       $errou++;
	   
	   //echo "Questão 9 -  A resposta está errada a alternativa correta seria letra c <br><br>";
	   
    }  
    
    

            if($q10 == $resposta10)
     {
	        $acertou++;
    //echo "Questão 10 - Parabéns você acertou <br><br>";
	}
	
	     else
           {	   
            $errou++;
	   
	   //echo "Questão 10 -  A resposta está errada a alternativa correta seria letra d <br><br>";
	   
    }   


   
	   
	   
      //echo "<br><br>Voce acertou $acertou e errou $errou <br><br>";
	  
	  /*casting de conversão para numero inteiro*/
	  
	  $porc_acertos = ($acertou * (100/ ( $acertou + $errou)));
	  
	  $porc_erros = ($errou * (100/ ( $acertou + $errou)));
	  
	  //echo "Percentual de erros : $porc_erros %  <br> ";
	  
      //echo "Percentual de acertos : $porc_acertos %  <br> ";
            ?>




                    <div class="container"> 
                            
                        <form name="questionario" method="post" action="respquiz.php">
                             <div class="container row mb-4" style="align-items: center;
                                justify-content: center;">
                                <?php
                                 if ($q1 == $resposta1) {
                            echo '<div class="alert alert-success" role="alert"> Parabéns você acertou! </div>';
                        } else {
                      echo '<div class="alert alert-danger" role="alert"> A resposta está errada, resposta correta é a letra A! </div>';
                    }
                      ?>
                        <div class="card" style="width: 40%;">
                          <img src="img/mestre.jpg" class="card-img-top" alt="...">
                            <h5 class="card-header">1) Qual o nome desse senhor que ajuda os garotos ?</h5>
                              <div class="card-body">
                                 <label>
                               <input type="radio" name="opcao" value="opcao1" <?php if ($q1 == 'a') echo 'checked'; ?>>
                              <?php 
                            if ($q1 == $resposta1 && $q1 == 'a') {
                         echo '<span style="color:green"> a) Mestre dos magos </span>';
                        } else if ($q1 == 'a') {
                       echo '<span style="color:red"> a) Mestre dos magos </span>';
                     } else {
                      echo '<span> a) Mestre dos magos </span>';
                        }

                          ?>
                           </label>
                             <br>
                                <label>
                                  <input type="radio" name="opcao" value="opcao1" <?php if ($q1 == 'b') echo 'checked'; ?>>
                                    <?php 
                                      if ($q1 == $resposta1 && $q1 == 'b') {
                                    echo '<span style="color:green"> b) Velho ancião </span>';
                                   } else if ($q1 == 'b') {
                                 echo '<span style="color:red"> b) Velho ancião </span>';
                                } else {
                               echo 'b) Velho ancião';
                             }
                            ?>
                        </label>
                       <br>
                     <label>
                  <input type="radio" name="opcao" value="opcao1" <?php if ($q1 == 'c') echo 'checked'; ?>>
                 <?php 
                if ($q1 == $resposta1 && $q1 == 'c') {
                  echo '<span style="color:green"> c) Senhor careca </span> ';
                    } else if ($q1 == 'c') {
                      echo '<span style="color:red">c) Senhor careca </span>';
                        } else {
                          echo 'c) Senhor careca';
                            }
                              ?>
                                </label>
                                  <br>
                               <label>
                           <input type="radio" name="opcao" value="opcao1" <?php if ($q1 == 'd') echo 'checked'; ?>>
                        <?php 
                      if ($q1 == $resposta1 && $q1 == 'd') {
                    echo '<span style="color:green"> d) Vingador </span> ';
                   } else if ($q1 == 'd') {
                 echo '<span style="color:red">d) Vingador </span>';
                } else {
                echo 'd) Vingador';
                   }
                    ?>
                     </label>
                          <br>
                           </div>
                             </div>
                                </div>







            <form name="questionario" method="post" action="respquiz.php">
                                <div class="container row mb-4" style="align-items: center;
                                    justify-content: center;">
                                    <?php
                                 if ($q2 == $resposta2) {
                            echo '<div class="alert alert-success" role="alert"> Parabéns você acertou! </div>';
                        } else {
                      echo '<div class="alert alert-danger" role="alert"> A resposta está errada, resposta correta é a letra C! </div>';
                    }
                 ?>



            <div class="card" style="width: 40%;">
                <img src="img/uni.jpg" class="card-img-top" alt="...">
                    <h5 class="card-header">2) Qual o nome do unicórnio ?</h5>
                        <div class="card-body">
                        <label>
                            <input type="radio" name="opcao" value="opcao1" <?php if ($q2 == 'a') echo 'checked'; ?>>
                                <?php 
                        if ($q2 == $resposta2 && $q2 == 'a') {
                        echo '<span style="color:green"> a) Tiamat </span>';
                        } else if ($q2 == 'a') {
                        echo '<span style="color:red"> a) Tiamat </span>';
                        } else {
                         echo '<span> a) Tiamat </span>';
                        }
                       ?>
                        </label>
                           <br>
                    <label>
                        <input type="radio" name="opcao" value="opcao1" <?php if ($q1 == 'b') echo 'checked'; ?>>
                             <?php 
                                if ($q2 == $resposta2 && $q2 == 'b') {
                                echo '<span style="color:green"> b) Erick </span>';
                                } else if ($q2 == 'b') {
                                echo '<span style="color:red"> b) Erick </span>';
                                } else {
                                echo 'b) Erick';
                                }
                                ?>
                                </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q2 == 'c') echo 'checked'; ?>>
                                <?php 
                                if ($q2 == $resposta2 && $q2 == 'c') {
                                 echo '<span style="color:green"> c) Uni </span> ';
                                } else if ($q1 == 'c') {
                                echo '<span style="color:red">c) Uni </span>';
                                } else {
                                echo 'c) Uni';
                                }
                                ?>
                            </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q2 == 'd') echo 'checked'; ?>>
                                <?php 
                                if ($q2 == $resposta1 && $q2 == 'd') {
                                echo '<span style="color:green"> d) Cavalo Alado</span> ';
                                } else if ($q2 == 'd') {
                                echo '<span style="color:red">d) Cavalo Alado</span>';
                                } else {
                                echo 'd) Cavalo Alado';
                                }
                                ?>
                            </label>
                        <br>
                    </div>
                </div>
            </div>



            
            <form name="questionario" method="post" action="respquiz.php">
                                <div class="container row mb-4" style="align-items: center;
                                    justify-content: center;">
                                    <?php
                                 if ($q3 == $resposta3) {
                            echo '<div class="alert alert-success" role="alert"> Parabéns você acertou! </div>';
                        } else {
                      echo '<div class="alert alert-danger" role="alert"> A resposta está errada, resposta correta é a letra A! </div>';
                    }
                 ?>



            <div class="card" style="width: 40%;">
                <img src="img/presto.jpg" class="card-img-top" alt="...">
                    <h5 class="card-header">3) Qual o nome do personagem que é mago  ?</h5>
                        <div class="card-body">
                        <label>
                            <input type="radio" name="opcao" value="opcao1" <?php if ($q3 == 'a') echo 'checked'; ?>>
                                <?php 
                        if ($q3 == $resposta3 && $q3 == 'a') {
                        echo '<span style="color:green"> a) Presto </span>';
                        } else if ($q3 == 'a') {
                        echo '<span style="color:red"> a) Presto </span>';
                        } else {
                         echo '<span> a) Presto </span>';
                        }
                       ?>
                        </label>
                           <br>
                    <label>
                        <input type="radio" name="opcao" value="opcao1" <?php if ($q3 == 'b') echo 'checked'; ?>>
                             <?php 
                                if ($q3 == $resposta3 && $q3 == 'b') {
                                echo '<span style="color:green"> b) Hank </span>';
                                } else if ($q3 == 'b') {
                                echo '<span style="color:red">b) Hank</span>';
                                } else {
                                echo 'b) Hank';
                                }
                                ?>
                                </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q3 == 'c') echo 'checked'; ?>>
                                <?php 
                                if ($q3 == $resposta3 && $q3 == 'c') {
                                 echo '<span style="color:green"> c) Mestre dos magos </span> ';
                                } else if ($q3 == 'c') {
                                echo '<span style="color:red">c) Mestre dos magos</span>';
                                } else {
                                echo 'c) Mestre dos magos';
                                }
                                ?>
                            </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q3 == 'd') echo 'checked'; ?>>
                                <?php 
                                if ($q3 == $resposta3 && $q3 == 'd') {
                                echo '<span style="color:green"> d) Diana</span> ';
                                } else if ($q3 == 'd') {
                                echo '<span style="color:red">d) Diana</span>';
                                } else {
                                echo 'd) Diana';
                                }
                                ?>
                            </label>
                        <br>
                    </div>
                </div>
            </div>



            <form name="questionario" method="post" action="respquiz.php">
                                <div class="container row mb-4" style="align-items: center;
                                    justify-content: center;">
                                    <?php
                                 if ($q4 == $resposta4) {
                            echo '<div class="alert alert-success" role="alert"> Parabéns você acertou! </div>';
                        } else {
                      echo '<div class="alert alert-danger" role="alert"> A resposta está errada, resposta correta é a letra C! </div>';
                    }
                 ?>



            <div class="card" style="width: 40%;">
                <img src="img/hank.jpg" class="card-img-top" alt="...">
                    <h5 class="card-header">4) Qual a Arma de Hank?</h5>
                        <div class="card-body">
                        <label>
                            <input type="radio" name="opcao" value="opcao1" <?php if ($q4 == 'a') echo 'checked'; ?>>
                                <?php 
                        if ($q4 == $resposta4 && $q4 == 'a') {
                        echo '<span style="color:green"> a) Porrete </span>';
                        } else if ($q4 == 'a') {
                        echo '<span style="color:red"> a) Porrete </span>';
                        } else {
                         echo '<span> a) Porrete </span>';
                        }
                       ?>
                        </label>
                           <br>
                    <label>
                        <input type="radio" name="opcao" value="opcao1" <?php if ($q4 == 'b') echo 'checked'; ?>>
                             <?php 
                                if ($q4 == $resposta4 && $q4 == 'b') {
                                echo '<span style="color:green"> b) Bastão </span>';
                                } else if ($q4 == 'b') {
                                echo '<span style="color:red">b) Bastão</span>';
                                } else {
                                echo 'b) Bastão';
                                }
                                ?>
                                </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q4 == 'c') echo 'checked'; ?>>
                                <?php 
                                if ($q4 == $resposta4 && $q4 == 'c') {
                                 echo '<span style="color:green"> c) Arco mágico </span> ';
                                } else if ($q4 == 'c') {
                                echo '<span style="color:red">c) Arco mágico</span>';
                                } else {
                                echo 'c) Arco mágico';
                                }
                                ?>
                            </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q4 == 'd') echo 'checked'; ?>>
                                <?php 
                                if ($q4 == $resposta4 && $q4 == 'd') {
                                echo '<span style="color:green"> d) Espada</span> ';
                                } else if ($q4 == 'd') {
                                echo '<span style="color:red">d) Espada</span>';
                                } else {
                                echo 'd) Espada';
                                }
                                ?>
                            </label>
                        <br>
                    </div>
                </div>
            </div>


            <form name="questionario" method="post" action="respquiz.php">
                                <div class="container row mb-4" style="align-items: center;
                                    justify-content: center;">
                                    <?php
                                 if ($q5 == $resposta5) {
                            echo '<div class="alert alert-success" role="alert"> Parabéns você acertou! </div>';
                        } else {
                      echo '<div class="alert alert-danger" role="alert"> A resposta está errada, resposta correta é a letra D! </div>';
                    }
                 ?>



            <div class="card" style="width: 40%;">
                <img src="img/tiamat.jpg" class="card-img-top" alt="...">
                    <h5 class="card-header">5) Qual o nome do dragão de 5 cabeças ?</h5>
                        <div class="card-body">
                        <label>
                            <input type="radio" name="opcao" value="opcao1" <?php if ($q5 == 'a') echo 'checked'; ?>>
                                <?php 
                        if ($q5 == $resposta5 && $q5 == 'a') {
                        echo '<span style="color:green"> a) Charizard </span>';
                        } else if ($q5 == 'a') {
                        echo '<span style="color:red"> a) Charizard </span>';
                        } else {
                         echo '<span> a) Charizard </span>';
                        }
                       ?>
                        </label>
                           <br>
                    <label>
                        <input type="radio" name="opcao" value="opcao1" <?php if ($q5 == 'b') echo 'checked'; ?>>
                             <?php 
                                if ($q5 == $resposta5 && $q5 == 'b') {
                                echo '<span style="color:green"> b) Uni </span>';
                                } else if ($q5 == 'b') {
                                echo '<span style="color:red">b) Uni</span>';
                                } else {
                                echo 'b) Uni';
                                }
                                ?>
                                </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q5 == 'c') echo 'checked'; ?>>
                                <?php 
                                if ($q5 == $resposta5 && $q5 == 'c') {
                                 echo '<span style="color:green"> c) Banguela </span> ';
                                } else if ($q5 == 'c') {
                                echo '<span style="color:red">c) Banguela</span>';
                                } else {
                                echo 'c) Banguela';
                                }
                                ?>
                            </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q5 == 'd') echo 'checked'; ?>>
                                <?php 
                                if ($q5 == $resposta5 && $q5 == 'd') {
                                echo '<span style="color:green"> d) Tiamat</span> ';
                                } else if ($q5 == 'd') {
                                echo '<span style="color:red">d) Tiamat</span>';
                                } else {
                                echo 'd) Tiamat';
                                }
                                ?>
                            </label>
                        <br>
                    </div>
                </div>
            </div>


            <form name="questionario" method="post" action="respquiz.php">
                                <div class="container row mb-4" style="align-items: center;
                                    justify-content: center;">
                                    <?php
                                 if ($q6 == $resposta6) {
                            echo '<div class="alert alert-success" role="alert"> Parabéns você acertou! </div>';
                        } else {
                      echo '<div class="alert alert-danger" role="alert"> A resposta está errada, resposta correta é a letra B! </div>';
                    }
                 ?>



            <div class="card" style="width: 40%;">
                <img src="img/sheila.jpg" class="card-img-top" alt="...">
                    <h5 class="card-header">6)Qual o nome da arma mágica da Sheila ?</h5>
                        <div class="card-body">
                        <label>
                            <input type="radio" name="opcao" value="opcao1" <?php if ($q6 == 'a') echo 'checked'; ?>>
                                <?php 
                        if ($q6 == $resposta6 && $q6 == 'a') {
                        echo '<span style="color:green"> a) Arco e flecha </span>';
                        } else if ($q6 == 'a') {
                        echo '<span style="color:red"> a) Arco e flecha </span>';
                        } else {
                         echo '<span> a) Arco e flecha </span>';
                        }
                       ?>
                        </label>
                           <br>
                    <label>
                        <input type="radio" name="opcao" value="opcao1" <?php if ($q6 == 'b') echo 'checked'; ?>>
                             <?php 
                                if ($q6 == $resposta6 && $q6 == 'b') {
                                echo '<span style="color:green"> b) Capa de invisibilidade </span>';
                                } else if ($q6 == 'b') {
                                echo '<span style="color:red">b) Capa de invisibilidade</span>';
                                } else {
                                echo 'b) Capa de invisibilidade';
                                }
                                ?>
                                </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q6 == 'c') echo 'checked'; ?>>
                                <?php 
                                if ($q6 == $resposta6 && $q6 == 'c') {
                                 echo '<span style="color:green"> c) Bastão </span> ';
                                } else if ($q6 == 'c') {
                                echo '<span style="color:red">c) Bastão</span>';
                                } else {
                                echo 'c) Bastão';
                                }
                                ?>
                            </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q6 == 'd') echo 'checked'; ?>>
                                <?php 
                                if ($q6 == $resposta6 && $q6 == 'd') {
                                echo '<span style="color:green"> d) Espada</span> ';
                                } else if ($q6 == 'd') {
                                echo '<span style="color:red">d) Espada</span>';
                                } else {
                                echo 'd) Espada';
                                }
                                ?>
                            </label>
                        <br>
                    </div>
                </div>
            </div>



            <form name="questionario" method="post" action="respquiz.php">
                                <div class="container row mb-4" style="align-items: center;
                                    justify-content: center;">
                                    <?php
                                 if ($q7 == $resposta7) {
                            echo '<div class="alert alert-success" role="alert"> Parabéns você acertou! </div>';
                        } else {
                      echo '<div class="alert alert-danger" role="alert"> A resposta está errada, resposta correta é a letra D! </div>';
                    }
                 ?>



            <div class="card" style="width: 40%;">
                <img src="img/parque.jpg" class="card-img-top" alt="...">
                    <h5 class="card-header">7) Qual o brinquedo que levou as crianças ao outro universo?</h5>
                        <div class="card-body">
                        <label>
                            <input type="radio" name="opcao" value="opcao1" <?php if ($q7 == 'a') echo 'checked'; ?>>
                                <?php 
                        if ($q7 == $resposta7 && $q7 == 'a') {
                        echo '<span style="color:green"> a) Carrinho de bate bate </span>';
                        } else if ($q7 == 'a') {
                        echo '<span style="color:red"> a) Carrinho de bate bate </span>';
                        } else {
                         echo '<span> a) Carrinho de bate bate </span>';
                        }
                       ?>
                        </label>
                           <br>
                    <label>
                        <input type="radio" name="opcao" value="opcao1" <?php if ($q7 == 'b') echo 'checked'; ?>>
                             <?php 
                                if ($q7 == $resposta7 && $q7 == 'b') {
                                echo '<span style="color:green"> b) Montanha russa </span>';
                                } else if ($q7 == 'b') {
                                echo '<span style="color:red">b) Montanha russa</span>';
                                } else {
                                echo 'b) Montanha russa';
                                }
                                ?>
                                </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q7 == 'c') echo 'checked'; ?>>
                                <?php 
                                if ($q7 == $resposta7 && $q7 == 'c') {
                                 echo '<span style="color:green"> c) Roda gigante </span> ';
                                } else if ($q7 == 'c') {
                                echo '<span style="color:red">c) Roda gigante</span>';
                                } else {
                                echo 'c) Roda gigante';
                                }
                                ?>
                            </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q7 == 'd') echo 'checked'; ?>>
                                <?php 
                                if ($q7 == $resposta7 && $q7 == 'd') {
                                echo '<span style="color:green"> d) Trem fantasma</span> ';
                                } else if ($q7 == 'd') {
                                echo '<span style="color:red">d) Trem fantasma</span>';
                                } else {
                                echo 'd) Trem fantasma';
                                }
                                ?>
                            </label>
                        <br>
                    </div>
                </div>
            </div>


            


            <form name="questionario" method="post" action="respquiz.php">
                                <div class="container row mb-4" style="align-items: center;
                                    justify-content: center;">
                                    <?php
                                 if ($q9 == $resposta9) {
                            echo '<div class="alert alert-success" role="alert"> Parabéns você acertou! </div>';
                        } else {
                      echo '<div class="alert alert-danger" role="alert"> A resposta está errada, resposta correta é a letra B! </div>';
                    }
                 ?>



            <div class="card" style="width: 40%;">
                <img src="img/armas.jpg" class="card-img-top" alt="...">
                    <h5 class="card-header">8) Qual a origem das Armas do Poder?</h5>
                        <div class="card-body">
                        <label>
                            <input type="radio" name="opcao" value="opcao1" <?php if ($q8 == 'a') echo 'checked'; ?>>
                                <?php 
                        if ($q8 == $resposta8 && $q8 == 'a') {
                        echo '<span style="color:green"> a) Cidadela das Sombras </span>';
                        } else if ($q8 == 'a') {
                        echo '<span style="color:red"> a) Cidadela das Sombras </span>';
                        } else {
                         echo '<span> a) Cidadela das Sombras </span>';
                        }
                       ?>
                        </label>
                           <br>
                    <label>
                        <input type="radio" name="opcao" value="opcao1" <?php if ($q8 == 'b') echo 'checked'; ?>>
                             <?php 
                                if ($q8 == $resposta8 && $q8 == 'b') {
                                echo '<span style="color:green"> b) Cemitério dos Dragões </span>';
                                } else if ($q8 == 'b') {
                                echo '<span style="color:red">b) Cemitério dos Dragões</span>';
                                } else {
                                echo 'b) Cemitério dos Dragões';
                                }
                                ?>
                                </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q8 == 'c') echo 'checked'; ?>>
                                <?php 
                                if ($q8 == $resposta8 && $q8 == 'c') {
                                 echo '<span style="color:red"> c) Vale dos Unicórnios </span> ';
                                } else if ($q8 == 'c') {
                                echo '<span style="color:red">c) Vale dos Unicórnios</span>';
                                } else {
                                echo 'c) Vale dos Unicórnios';
                                }
                                ?>
                            </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q8 == 'd') echo 'checked'; ?>>
                                <?php 
                                if ($q8 == $resposta8 && $q8 == 'd') {
                                echo '<span style="color:green"> d) jardim de Zinn</span> ';
                                } else if ($q8 == 'd') {
                                echo '<span style="color:red">d) jardim de Zinn</span>';
                                } else {
                                echo 'd) jardim de Zinn';
                                }
                                ?>
                            </label>
                        <br>
                    </div>
                </div>
            </div>


            <form name="questionario" method="post" action="respquiz.php">
                                <div class="container row mb-4" style="align-items: center;
                                    justify-content: center;">
                                    <?php
                                 if ($q9 == $resposta9) {
                            echo '<div class="alert alert-success" role="alert"> Parabéns você acertou! </div>';
                        } else {
                      echo '<div class="alert alert-danger" role="alert"> A resposta está errada, resposta correta é a letra C! </div>';
                    }
                 ?>



            <div class="card" style="width: 40%;">
                <img src="img/caverna.jpg" class="card-img-top" alt="...">
                    <h5 class="card-header">9) Qual o nome dos Protagonistas do Desenho?</h5>
                        <div class="card-body">
                        <label>
                            <input type="radio" name="opcao" value="opcao1" <?php if ($q9 == 'a') echo 'checked'; ?>>
                                <?php 
                        if ($q9 == $resposta9 && $q9 == 'a') {
                        echo '<span style="color:green"> a) Hawk, Eric, Diana, Sheila, Presto, Bobby </span>';
                        } else if ($q9 == 'a') {
                        echo '<span style="color:red"> a) Hawk, Eric, Diana, Sheila, Presto, Bobby </span>';
                        } else {
                         echo '<span> a) Hawk, Eric, Diana, Sheila, Presto, Bobby </span>';
                        }
                       ?>
                        </label>
                           <br>
                    <label>
                        <input type="radio" name="opcao" value="opcao1" <?php if ($q9 == 'b') echo 'checked'; ?>>
                             <?php 
                                if ($q9 == $resposta9 && $q9 == 'b') {
                                echo '<span style="color:green"> b) Hank, Eric, Diana, Sharon, Presto, Bobby </span>';
                                } else if ($q9 == 'b') {
                                echo '<span style="color:red">b) Hank, Eric, Diana, Sharon, Presto, Bobby</span>';
                                } else {
                                echo 'b) Hank, Eric, Diana, Sharon, Presto, Bobby';
                                }
                                ?>
                                </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q9 == 'c') echo 'checked'; ?>>
                                <?php 
                                if ($q9 == $resposta9 && $q9 == 'c') {
                                 echo '<span style="color:green"> c) Hank, Eric, Diana, Sheila, Presto, Bobby </span> ';
                                } else if ($q9 == 'c') {
                                echo '<span style="color:red">c) Hank, Eric, Diana, Sheila, Presto, Bobby</span>';
                                } else {
                                echo 'c) Hank, Eric, Diana, Sheila, Presto, Bobby';
                                }
                                ?>
                            </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q9 == 'd') echo 'checked'; ?>>
                                <?php 
                                if ($q9 == $resposta9 && $q9 == 'd') {
                                echo '<span style="color:green"> d) Hank, Eric, Diana, Sheila, Preston, Bobby</span> ';
                                } else if ($q9 == 'd') {
                                echo '<span style="color:red">d) Hank, Eric, Diana, Sheila, Preston, Bobby</span>';
                                } else {
                                echo 'd) Hank, Eric, Diana, Sheila, Preston, Bobby';
                                }
                                ?>
                            </label>
                        <br>
                    </div>
                </div>
            </div>




            <form name="questionario" method="post" action="respquiz.php">
                                <div class="container row mb-4" style="align-items: center;
                                    justify-content: center;">
                                    <?php
                                 if ($q10 == $resposta10) {
                            echo '<div class="alert alert-success" role="alert"> Parabéns você acertou! </div>';
                        } else {
                      echo '<div class="alert alert-danger" role="alert"> A resposta está errada, resposta correta é a letra D! </div>';
                    }
                 ?>



            <div class="card" style="width: 40%;">
                <img src="img/vingador.jpg" class="card-img-top" alt="...">
                    <h5 class="card-header">10) Qual o nome do personagem montado em um pesadelo?</h5>
                        <div class="card-body">
                        <label>
                            <input type="radio" name="opcao" value="opcao1" <?php if ($q10 == 'a') echo 'checked'; ?>>
                                <?php 
                        if ($q10 == $resposta10 && $q10 == 'a') {
                        echo '<span style="color:green"> a) Mestre dos Magos </span>';
                        } else if ($q10 == 'a') {
                        echo '<span style="color:red"> a) Mestre dos Magos </span>';
                        } else {
                         echo '<span> a) Mestre dos Magos </span>';
                        }
                       ?>
                        </label>
                           <br>
                    <label>
                        <input type="radio" name="opcao" value="opcao1" <?php if ($q10 == 'b') echo 'checked'; ?>>
                             <?php 
                                if ($q10 == $resposta10 && $q10 == 'b') {
                                echo '<span style="color:green"> b) Presto </span>';
                                } else if ($q10 == 'b') {
                                echo '<span style="color:red">b) Presto</span>';
                                } else {
                                echo 'b) Presto';
                                }
                                ?>
                                </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q10 == 'c') echo 'checked'; ?>>
                                <?php 
                                if ($q10 == $resposta10 && $q10 == 'c') {
                                 echo '<span style="color:green"> c) Sombra </span> ';
                                } else if ($q10 == 'c') {
                                echo '<span style="color:red">c) Sombra</span>';
                                } else {
                                echo 'c) Sombra';
                                }
                                ?>
                            </label>
                            <br>

                            <label>
                                <input type="radio" name="opcao" value="opcao1" <?php if ($q10 == 'd') echo 'checked'; ?>>
                                <?php 
                                if ($q10 == $resposta10 && $q10 == 'd') {
                                echo '<span style="color:green"> d) Vingador</span> ';
                                } else if ($q10 == 'd') {
                                echo '<span style="color:red">d) Vingador</span>';
                                } else {
                                echo 'd) Vingador';
                                }
                                ?>
                            </label>
                        <br>
                    </div>
                </div>
            </div>

                                <?php
                        echo "<div class=container row mb-4>";
                        echo "<div class= bloco>"; 
                        echo "<br><br>Você acertou $acertou e errou $errou <br><br>";
                        
                        /*casting de conversão para numero inteiro*/
                        
                        $porc_acertos = ($acertou * (100/ ( $acertou + $errou)));
                        
                        $porc_erros = ($errou * (100/ ( $acertou + $errou)));
                        
                        echo "Percentual de erros : $porc_erros %  <br> ";
                        
                        echo "Percentual de acertos : $porc_acertos %  <br> ";
                        
                        
                        echo "</div>"; 
                        echo "</div>"; 
                        echo "<br>"
                        
                    ?>



            
            
                    <div class="container row mb-1" style="align-items: center;
            justify-content: center;">
                    
                        <a href="questoes.php" class=limpar> Voltar </a>

        </div>
            </form>
                </div>
                
                
                



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
