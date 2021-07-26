<?php

for ($i = 1; $i <= $_POST['contando']; $i++) { 

            if($_POST['realizar'] == "sim"){ 
            echo ''.'<p>'.''.$_POST['nome'].' '.'conta'.' '.$i.'<br>';
            echo ''.$_POST['nome'].' '.'conta'.' '.$i;

            
                for ($j = 1; $j <= $i; $j++) {
                    echo ' '. 'é'.' '.$j;
                }
            
                echo ''.'<br>';
                echo ''.$_POST['nome'].' '.'viva a'.' '.$_POST['nome'].' '. 'viva a'. ' '.$_POST['nome'],'</p>';

                    }else{
                        for ($i = 1; $i <= $_POST['contando']; $i++) { 

                            echo ''.'<p>'.''.$_POST['nome'].' '.'conta'.' '.$i.'<br>';
                            echo ''.$_POST['nome'].' '.'viva a'.' '.$_POST['nome'].' '. 'viva a'. ' '.$_POST['nome'],'</p>';
                        }
                        
                    }

                }    
?>


        


