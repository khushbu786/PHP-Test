<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style> 
            td,th {
            border: none;
            }
            </style>
    </head>
    <body>
        <table width='200' border='1'>
            <form action="#" method="post">
          <tr>
            <th>Name</th>
            <th>Price</th> 
            <th>Weight</th>
          </tr>
         <?php $items=array(); ?>
            <tr>
                <td><input type="checkbox" name="check_list[]" value="Item1"><label>Item1</label><br/></td>
              <td>10</td> 
              <td>200</td>
              <?php $items[0]=array("name"=>"Item1", "price"=>"10","weight"=> "200"); ?>
            </tr>
            <tr>
                <td><input type="checkbox" name="check_list[]" value="Item2"><label>Item2</label><br/></td>
                <td>100</td> 
                <td>20</td>
                 <?php $items[1]=array("name"=>"Item2", "price"=>"100","weight"=> "20"); ?>
            </tr>
           <tr>
                <td><input type="checkbox" name="check_list[]" value="Item3"><label>Item3</label><br/></td>
                <td>30</td> 
                <td>300</td>
                 <?php $items[2]=array("name"=>"Item3", "price"=>"30","weight"=> "300"); ?>
            </tr>
            <tr>
                <td><input type="checkbox" name="check_list[]" value="Item4"><label>Item4</label><br/></td>
                <td>20</td> 
                <td>500</td>
                 <?php $items[3]=array("name"=>"Item4", "price"=>"20","weight"=> "500"); ?>
            </tr>
            <tr>
                <td><input type="checkbox" name="check_list[]" value="Item5"><label>Item5</label><br/></td>
                <td>30</td> 
                <td>250</td>
                 <?php $items[4]=array("name"=>"Item5", "price"=>"30","weight"=> "250"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item6"><label>Item6</label><br/></td>
                <td>40</td> 
                <td>10</td>
                 <?php $items[5]=array("name"=>"Item6", "price"=>"40","weight"=> "10"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item7"><label>Item7</label><br/></td>
                <td>200</td> 
                <td>10</td>
                 <?php $items[6]=array("name"=>"Item7", "price"=>"200","weight"=> "10"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item8"><label>Item8</label><br/></td>
                <td>120</td> 
                <td>500</td>
                 <?php $items[7]=array("name"=>"Item8", "price"=>"120","weight"=> "500"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item9"><label>Item9</label><br/></td>
                <td>130</td> 
                <td>790</td>
                 <?php $items[8]=array("name"=>"Item9", "price"=>"130","weight"=> "790"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item10"><label>Item10</label><br/></td>
                <td>20</td> 
                <td>100</td>
                 <?php $items[9]=array("name"=>"Item10", "price"=>"20","weight"=> "100"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item11"><label>Item11</label><br/></td>
                <td>10</td> 
                <td>340</td>
                 <?php $items[10]=array("name"=>"Item11", "price"=>"10","weight"=> "340"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item12"><label>Item12</label><br/></td>
                <td>4</td> 
                <td>800</td>
                 <?php $items[11]=array("name"=>"Item12", "price"=>"4","weight"=> "800"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item13"><label>Item13</label><br/></td>
                <td>5</td> 
                <td>200</td>
                 <?php $items[12]=array("name"=>"Item13", "price"=>"5","weight"=> "200"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item14"><label>Item14</label><br/></td>
                <td>240</td> 
                <td>20</td>
                 <?php $items[13]=array("name"=>"Item14", "price"=>"240","weight"=> "20"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item15"><label>Item15</label><br/></td>
                <td>123</td> 
                <td>700</td>
                 <?php $items[14]=array("name"=>"Item15", "price"=>"123","weight"=> "700"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item16"><label>Item16</label><br/></td>
                <td>245</td> 
                <td>10</td>
                 <?php $items[15]=array("name"=>"Item16", "price"=>"245","weight"=> "10"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item17"><label>Item17</label><br/></td>
                <td>230</td> 
                <td>20</td>
                 <?php $items[16]=array("name"=>"Item17", "price"=>"230","weight"=> "20"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item18"><label>Item18</label><br/></td>
                <td>110</td> 
                <td>200</td>
                 <?php $items[17]=array("name"=>"Item18", "price"=>"110","weight"=> "200"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item19"><label>Item19</label><br/></td>
                <td>45</td> 
                <td>200</td>
                 <?php $items[18]=array("name"=>"Item19", "price"=>"45","weight"=> "200"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item20"><label>Item20</label><br/></td>
                <td>67</td> 
                <td>20</td>
                 <?php $items[19]=array("name"=>"Item20", "price"=>"67","weight"=> "20"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item21"><label>Item21</label><br/></td>
                <td>88</td> 
                <td>300</td>
                 <?php $items[20]=array("name"=>"Item21", "price"=>"88","weight"=> "300"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item22"><label>Item22</label><br/></td>
                <td>10</td> 
                <td>500</td>
                 <?php $items[21]=array("name"=>"Item22", "price"=>"10","weight"=> "500"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item23"><label>Item23</label><br/></td>
                <td>17</td> 
                <td>250</td>
                 <?php $items[22]=array("name"=>"Item23", "price"=>"17","weight"=> "250"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item24"><label>Item24</label><br/></td>
                <td>19</td> 
                <td>10</td>
                 <?php $items[23]=array("name"=>"Item24", "price"=>"19","weight"=> "10"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item25"><label>Item25</label><br/></td>
                <td>89</td> 
                <td>10</td>
                 <?php $items[24]=array("name"=>"Item25", "price"=>"89","weight"=> "10"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item26"><label>Item26</label><br/></td>
                <td>45</td> 
                <td>500</td>
                 <?php $items[25]=array("name"=>"Item26", "price"=>"45","weight"=> "500"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item27"><label>Item27</label><br/></td>
                <td>99</td> 
                <td>790</td>
                 <?php $items[26]=array("name"=>"Item27", "price"=>"99","weight"=> "790"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item28"><label>Item28</label><br/></td>
                <td>125</td> 
                <td>100</td>
                 <?php $items[27]=array("name"=>"Item28", "price"=>"125","weight"=> "100"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item29"><label>Item29</label><br/></td>
                <td>198</td> 
                <td>340</td>
                 <?php $items[28]=array("name"=>"Item29", "price"=>"198","weight"=> "340"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item30"><label>Item30</label><br/></td>
                <td>220</td> 
                <td>800</td>
                 <?php $items[29]=array("name"=>"Item30", "price"=>"220","weight"=> "800"); ?>
            </tr>
            <tr>
                <td><input type="checkbox" name="check_list[]" value="Item31"><label>Item31</label><br/></td>
                <td>249</td> 
                <td>200</td>
                 <?php $items[30]=array("name"=>"Item31", "price"=>"249","weight"=> "200"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item32"><label>Item32</label><br/></td>
                <td>230</td> 
                <td>20</td>
                 <?php $items[31]=array("name"=>"Item32", "price"=>"230","weight"=> "20"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item33"><label>Item33</label><br/></td>
                <td>190</td> 
                <td>700</td>
                 <?php $items[32]=array("name"=>"Item33", "price"=>"190","weight"=> "700"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item34"><label>Item34</label><br/></td>
                <td>45</td> 
                <td>10</td>
                 <?php $items[33]=array("name"=>"Item34", "price"=>"45","weight"=> "10"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item35"><label>Item35</label><br/></td>
                <td>12</td> 
                <td>20</td>
                 <?php $items[34]=array("name"=>"Item35", "price"=>"12","weight"=> "20"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item36"><label>Item36</label><br/></td>
                <td>5</td> 
                <td>200</td>
                 <?php $items[35]=array("name"=>"Item36", "price"=>"5","weight"=> "200"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item37"><label>Item37</label><br/></td>
                <td>2</td> 
                <td>200</td>
                 <?php $items[36]=array("name"=>"Item37", "price"=>"2","weight"=> "200"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item38"><label>Item38</label><br/></td>
                <td>90</td> 
                <td>20</td>
                 <?php $items[37]=array("name"=>"Item38", "price"=>"90","weight"=> "20"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item39"><label>Item39</label><br/></td>
                <td>12</td> 
                <td>300</td>
                 <?php $items[38]=array("name"=>"Item39", "price"=>"12","weight"=> "300"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item40"><label>Item40</label><br/></td>
                <td>167</td> 
                <td>500</td>
                 <?php $items[39]=array("name"=>"Item40", "price"=>"167","weight"=> "500"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item41"><label>Item41</label><br/></td>
                <td>12</td> 
                <td>250</td>
                 <?php $items[40]=array("name"=>"Item41", "price"=>"12","weight"=> "250"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item42"><label>Item42</label><br/></td>
                <td>8</td> 
                <td>10</td>
                 <?php $items[41]=array("name"=>"Item42", "price"=>"8","weight"=> "10"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item43"><label>Item43</label><br/></td>
                <td>2</td> 
                <td>10</td>
                 <?php $items[42]=array("name"=>"Item43", "price"=>"2","weight"=> "10"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item44"><label>Item44</label><br/></td>
                <td>9</td> 
                <td>500</td>
                 <?php $items[43]=array("name"=>"Item44", "price"=>"9","weight"=> "500"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item45"><label>Item45</label><br/></td>
                <td>210</td> 
                <td>790</td>
                 <?php $items[44]=array("name"=>"Item45", "price"=>"210","weight"=> "790"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item46"><label>Item46</label><br/></td>
                <td>167</td> 
                <td>100</td>
                 <?php $items[45]=array("name"=>"Item46", "price"=>"167","weight"=> "100"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item47"><label>Item47</label><br/></td>
                <td>23</td> 
                <td>340</td>
                 <?php $items[46]=array("name"=>"Item47", "price"=>"23","weight"=> "340"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item48"><label>Item48</label><br/></td>
                <td>190</td> 
                <td>800</td>
                 <?php $items[47]=array("name"=>"Item48", "price"=>"190","weight"=> "800"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item49"><label>Item49</label><br/></td>
                <td>199</td> 
                <td>200</td>
                 <?php $items[48]=array("name"=>"Item49", "price"=>"199","weight"=> "200"); ?>
            </tr><tr>
                <td><input type="checkbox" name="check_list[]" value="Item50"><label>Item50</label><br/></td>
                <td>12</td> 
                <td>20</td>
                 <?php $items[49]=array("name"=>"Item50", "price"=>"12","weight"=> "20"); ?>
            </tr>
        </table>
            <input type="submit" name="submit" value="Place Order"/>
             </form>
 <?php
            $selected_items=array();
            $j=0;
            if(isset($_POST['submit'])){//to run PHP script on submit
            if(!empty($_POST['check_list']))
            {
                     $price_array=[];
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['check_list'] as $selected)
            {
              
                $round = count($items);  
              for($i=0; $i < $round; $i++)
              { 
                  if($selected== $items[$i]["name"])
                  {
                      $name=$items[$i]["name"];
                      $price=$items[$i]["price"];
                      $weight=$items[$i]["weight"];
                      $selected_items[$j]= array("name"=>"$name", "price"=>"$price","weight"=>"$weight" );
                       
                     $perms[$j]["$name"]=$price; //$perms = Permutations
                     $j++;
                  }
                }  
            }
            echo "<br />";
  
                    if(array_sum(array_column($selected_items,"price"))>250)
                    {
                           
                        function printCombination($perms,$n, $r) 
                        { 
                             // A temporary array to store 
                       // all combination one by one 
                            $data = array(); 
                            // Print all combination using 
                       // temprary array 'data[]' 
                            combinationUtil($perms, $data, 0,$n - 1, 0, $r); 
                        } 
                         /* arr[] ---> Input Array 
                            n ---> Size of input array 
                            r ---> Size of a combination 
                                   to be printed 
                            index ---> Current index in data[] 
                            data[] ---> Temporary array to store 
                                        current combination 
                            i ---> index of current element in arr[] */
                        function combinationUtil($perms, $data, $start,$end, $index, $r) 
                        { 
                             global $selected_items;
                              $data_array_values=array();
                               // Current cobination is ready, print it 
                            if ($index == $r) 
                            { 
                                for ($j = 0; $j < $r; $j++)
                                {
                                          array_push($data_array_values,implode(" ",array_values($data[$j])));    
                                         for($i=0; $i < count($selected_items); $i++)
                                      {
                                          if($selected_items[$i]["name"]==implode(" ",array_keys($data[$j])))
                                          {
                                              $data[$j]["weight"]=$selected_items[$i]["weight"];
                                          }
                                      }
                                }
                                $weightourier_charge=array();
                                $total_price=array();
                               for ($j = 0; $j < $r; $j++)
                                {
                                   if(array_sum($data_array_values)<=250)
                                        {
                                       $temparray1=array_keys($data[$j]);
                                       $temparray2=array_values($data[$j]);
                                        echo " name: ". array_shift($temparray1)." ";
                                        $total_price[$j]=array_shift($temparray2);
                                           $weightourier_charge[$j]=$data[$j]["weight"];
                                        }
                               }
                                if(array_sum($weightourier_charge)>=0 && array_sum($weightourier_charge)<= 200)
                                           {
                                               $weightharge= 5;
                                           }
                                          if(array_sum($weightourier_charge)>200 && array_sum($weightourier_charge)<= 500)
                                           {
                                               $weightharge= 10;
                                           }
                                          if(array_sum($weightourier_charge)>500 && array_sum($weightourier_charge)<= 1000)
                                           {
                                               $weightharge= 15;
                                           }
                                           if(array_sum($weightourier_charge)>1000 && array_sum($weightourier_charge)<= 5000)
                                          { $weightharge=20;}
                                          if(array_sum($data_array_values)<=250)
                                          {
                                              echo "<br />total weight : ".array_sum($weightourier_charge)."<br />";
                                              echo "total price: ".array_sum($total_price)."<br />";
                                              echo "total courier price: $".$weightharge."<br />";
                                              echo"====================================<br /> <br />";
                                          }
                                          
                               
                                return; 
                            } 
                               // replace index with all 
                               // possible elements. The 
                               // condition "end-i+1 >=  
                               // r-index" makes sure that  
                               // including one element at 
                               // index will make a combination  
                               // with remaining elements at  
                               // remaining positions 
                            for ($i = $start;$i <= $end &&$end - $i + 1 >= $r - $index; $i++) 
                            { 
                                $data[$index] = $perms[$i]; 
                                combinationUtil($perms, $data, $i + 1, $end, $index + 1, $r); 
                            } 
                        } 
                         $n = sizeof($perms); 
                        for($r=$n;$r>=1;$r--) //$r = Npr math function calculation
                          {
                               printCombination($perms, $n, $r); 
                         }
                    }
                    else {
                        echo " name: ". implode(",",array_column($selected_items,"name"))."<br />";
                        echo "total weight: ". array_sum(array_column($selected_items,"weight"))."<br />";
                         echo "total price: ". array_sum(array_column($selected_items,"price"))."<br />";
                         if(array_sum(array_column($selected_items,"weight"))>=0 && array_sum(array_column($selected_items,"weight"))<= 200)
                                           {
                                               $weightharge= 5;
                                           }
                                          if(array_sum(array_column($selected_items,"weight"))>200 && array_sum(array_column($selected_items,"weight"))<= 500)
                                           {
                                               $weightharge= 10;
                                           }
                                          if(array_sum(array_column($selected_items,"weight"))>500 && array_sum(array_column($selected_items,"weight"))<= 1000)
                                           {
                                               $weightharge= 15;
                                           }
                                           if(array_sum(array_column($selected_items,"weight"))>1000 && array_sum(array_column($selected_items,"weight"))<= 5000)
                                          { $weightharge=20;}
                                          echo "total courier price: $".$weightharge."<br />";
                         
                    }
 
            }
            }
            ?>
    </body>
</html>
