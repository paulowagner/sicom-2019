function sortTable(n,tipo,name) {
        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
        table = document.getElementById(name);
        switching = true;
        //Set the sorting direction to ascending:
        dir = "asc"; 
        /*Make a loop that will continue until
        no switching has been done:*/
        while (switching) {
            //start by saying: no switching is done:
            switching = false;
            rows = table.getElementsByTagName("TR");
            /*Loop through all table rows (except the
            first, which contains table headers):*/
            for (i = 1; i < (rows.length - 1); i++) {
                //start by saying there should be no switching:
                shouldSwitch = false;
                /*Get the two elements you want to compare,
                one from current row and one from the next:*/
                x = rows[i].getElementsByTagName("TD")[n];
                y = rows[i + 1].getElementsByTagName("TD")[n];
                /*check if the two rows should switch place,
                based on the direction, asc or desc:*/
                if (dir == "asc") {
                    if(tipo==1||tipo==2){
                        if (toint(x.innerHTML.toLowerCase()) > toint(y.innerHTML.toLowerCase())) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch= true;
                            break;
                        }
                    }else{
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch= true;
                            break;
                        }
                    }
                } else if (dir == "desc") {
                    if(tipo==1||tipo==2){
                        if (toint(x.innerHTML.toLowerCase()) < toint(y.innerHTML.toLowerCase())) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch= true;
                            break;
                        }
                    }else{
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            //if so, mark as a switch and break the loop:
                            shouldSwitch= true;
                            break;
                        }
                    }
                }
            }
            if (shouldSwitch) {
                /*If a switch has been marked, make the switch
                and mark that a switch has been done:*/
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                //Each time a switch is done, increase this count by 1:
                switchcount ++; 
            } else {
                /*If no switching has been done AND the direction is "asc",
                set the direction to "desc" and run the while loop again.*/
                if (switchcount == 0 && dir == "asc") {
                    dir = "desc";
                    switching = true;
                }
            }
        }
    }
function Limpar(valor, validos) {
  var result = "";
  var aux;
  for (var i=0; i < valor.length; i++) {
    aux = validos.indexOf(valor.substring(i, i+1));
    if (aux>=0) 
      result += valor[i];
  }
  return result;
}
function toint(valor){
  if(valor == "")
    return 0;
  return parseInt(Limpar(valor,"0123456789"));
}
function significativo(num) {
  result = "";
  var i;
  for (i=0; i < num.length; i++) {
    if(num[i]=='0')
      continue;
    else{ 
      result += num[i];
      break;
    }
  }
  for (i=i+1; i < num.length; i++) {
      result += num[i];
  }
  return result;
}
function Formata_num(campo) {
  vr = Limpar(campo,"0123456789");
  vr = significativo(vr);
  tam = vr.length;
  if ( tam == 2 ){
    resul = "0,"+vr ;
  }else if(tam == 1){
    resul = "0,0"+vr ;
  }else if(tam == 0){
    resul = "0,00";
  }
  else{
    resul = "," + vr.substr( tam - 2, 2 ) ;
    tam-=2;
    while(tam>3){

      resul = "."+ vr.substr( tam - 3, 3)+ resul;
      tam-=3; 
    }
    resul = vr.substr( 0, tam ) + resul;
  }
  return resul;
}
function Formata(campo,tammax,teclapres,decimal) {
  vr = Limpar(campo.value,"0123456789");
  vr = significativo(vr);
  tam = vr.length;
  if ( tam == 2 ){
    resul = "0,"+vr ;
  }else if(tam == 1){
    resul = "0,0"+vr ;
  }else if(tam == 0){
    resul = "0,00";
  }
  else{
    resul = "," + vr.substr( tam - 2, 2 ) ;
    tam-=2;
    while(tam>3){

      resul = "."+ vr.substr( tam - 3, 3)+ resul;
      tam-=3; 
    }
    resul = vr.substr( 0, tam ) + resul;
  }
  campo.value = resul;
}
function FormataCEP(campo) {
  vr = Limpar(campo.value,"0123456789");
    tam = vr.length;
    if(tam<6)
      resul = vr;
    else{
      resul = vr.substr(0,5)+"-";
      tam-=5;
      vr = vr.substr(5,tam);
      if(tam>3){
        resul += vr.substr(0,3);
      }else{
        resul += vr.substr(0,tam);
      } 
    }
    campo.value = resul;
}
function toMes(num){
  if (num=="01") {
    return "January";
  }
  if (num=="02") {
    return "February";
  }
  if (num=="03") {
    return "March";
  }
  if (num=="04") {
    return "April";
  }
  if (num=="05") {
    return "May";
  }
  if (num=="06") {
    return "June";
  }
  if (num=="07") {
    return "July";
  }
  if (num=="08") {
    return "August";
  }
  if (num=="09") {
    return "September";
  }
  if (num=="10") {
    return "October";
  }
  if (num=="11") {
    return "November";
  }
  if (num=="12") {
    return "December";
  }
}
function tomescomplete(num){
  if (num=="Jan") {
    return "January";
  }
  if (num=="Feb") {
    return "February";
  }
  if (num=="Mar") {
    return "March";
  }
  if (num=="Apr") {
    return "April";
  }
  if (num=="May") {
    return "May";
  }
  if (num=="Jun") {
    return "June";
  }
  if (num=="Jul") {
    return "July";
  }
  if (num=="Aug") {
    return "August";
  }
  if (num=="Sep") {
    return "September";
  }
  if (num=="Oct") {
    return "October";
  }
  if (num=="Nov") {
    return "November";
  }
  if (num=="Dec") {
    return "December";
  }
}

function FormataDataHora(campo) {
  vr = Limpar(campo.value,"0123456789");
  flag = false;
  tam = vr.length;
  if(tam<3)
    resul = vr;
  else{
    resul = vr.substr(0,2)+"/";
    ver = " "+vr.substr(0,2)+", ";
    tam-=2;
    vr = vr.substr(2,tam);

    if(tam>2){
      resul += vr.substr(0,2)+"/";
      ver = toMes(vr.substr(0,2))+ver;
      tam-=2;
      vr = vr.substr(2,tam);
      if(tam>4){
        resul += vr.substr(0,4)+" ";
        ver +=vr.substr(0,4);
        flag = true;
        tam-=4;
        vr = vr.substr(4,tam);
        
        if(tam>2){
          num = tonumber(vr.substr(0,1))*10;
          num += tonumber(vr.substr(1,1));
          if(num>=0&&num<24){
            resul += vr.substr(0,2)+":";
            tam-=2;
            vr = vr.substr(2,tam);
            
            if(tam>=2){
              num = tonumber(vr.substr(0,1))*10;
              num += tonumber(vr.substr(1,1));
              if(num>=0&&num<60){
                resul += vr.substr(0,2);
              }
            }else{
              resul += vr.substr(0,tam);
            }
             
          }
        }else{
          resul += vr.substr(0,tam);
        } 

      }
      else{
        resul += vr.substr(0,tam);
      } 
    }else{
      resul += vr.substr(0,tam);
    } 
  }
  if(flag){
    var msec = Date.parse(ver);
    var d = new Date(msec);
    if(isNaN(msec))
      resul = "";
    else{
      var res = d.toString().split(" ");
      var cmp = ver.split(" ");
      if(tomescomplete(res[1])!=cmp[0])
        resul = "";
    }
  }
  campo.value = resul;
}
function FormataTEL(campo) {
  vr = Limpar(campo.value,"0123456789");
    tam = vr.length;
    resul = "";
    if(tam<2){
      if(tam==1)
        resul = "("+vr+" )";
      if(tam==2)
        resul = "("+vr+")"
    } 
    else{
      resul = "("+vr.substr(0,2)+") ";
      tam-=2;
      vr = vr.substr(2,tam);
      if(tam>=9){
        resul += vr.substr(0,5)+"-";
        resul += vr.substr(5,4);
      }
      else if(tam>4){
        resul += vr.substr(0,4)+"-";
        tam-=4;
        resul += vr.substr(4,tam);
      }else{
        resul += vr.substr(0,tam);
      } 
    }
    campo.value = resul;
}
function FormataTEL_ini(campo) {
  vr = Limpar(campo,"0123456789");
    tam = vr.length;
    resul = "";
    if(tam<2){
      if(tam==1)
        resul = "("+vr+" )";
      if(tam==2)
        resul = "("+vr+")"
    } 
    else{
      resul = "("+vr.substr(0,2)+") ";
      tam-=2;
      vr = vr.substr(2,tam);
      if(tam>=9){
        resul += vr.substr(0,5)+"-";
        resul += vr.substr(5,4);
      }
      else if(tam>4){
        resul += vr.substr(0,4)+"-";
        tam-=4;
        resul += vr.substr(4,tam);
      }else{
        resul += vr.substr(0,tam);
      } 
    }
    return resul;
}
function FormataCNPJ_ini(campo) {
  vr = Limpar(campo,"0123456789");
    tam = vr.length;
    if(tam<3)
      resul = vr;
    else{
      resul = vr.substr(0,2)+".";
      tam-=2;
      vr = vr.substr(2,tam);
      if(tam>3){
        resul += vr.substr(0,3)+".";
        tam-=3;
        vr = vr.substr(3,tam);
        if(tam>3){
          resul += vr.substr(0,3)+"/";
          tam-=3;
          vr = vr.substr(3,tam);
          if(tam>4){
            resul += vr.substr(0,4)+"-";
            tam-=4;
            vr = vr.substr(4,tam);
            if(tam>2)
              resul += vr.substr(0,2);
            else
              resul += vr.substr(0,tam);
          }else{
            resul += vr.substr(0,tam);
          }
        }else{
          resul += vr.substr(0,tam);
        }
      }else{
        resul += vr.substr(0,tam);
      } 
    }
    return resul;
}
function FormataCNPJ(campo) {
  vr = Limpar(campo.value,"0123456789");
    tam = vr.length;
    if(tam<3)
      resul = vr;
    else{
      resul = vr.substr(0,2)+".";
      tam-=2;
      vr = vr.substr(2,tam);
      if(tam>3){
        resul += vr.substr(0,3)+".";
        tam-=3;
        vr = vr.substr(3,tam);
        if(tam>3){
          resul += vr.substr(0,3)+"/";
          tam-=3;
          vr = vr.substr(3,tam);
          if(tam>4){
            resul += vr.substr(0,4)+"-";
            tam-=4;
            vr = vr.substr(4,tam);
            if(tam>2)
              resul += vr.substr(0,2);
            else
              resul += vr.substr(0,tam);
          }else{
            resul += vr.substr(0,tam);
          }
        }else{
          resul += vr.substr(0,tam);
        }
      }else{
        resul += vr.substr(0,tam);
      } 
    }
    campo.value = resul;
}
function toChar(num){
  if (num==0) {
    return "0";
  }
  if (num==1) {
    return "1";
  }
  if (num==2) {
    return "2";
  }
  if (num==3) {
    return "3";
  }
  if (num==4) {
    return "4";
  }
  if (num==5) {
    return "5";
  }
  if (num==6) {
    return "6";
  }
  if (num==7) {
    return "7";
  }
  if (num==8) {
    return "8";
  }
  if (num==9) {
    return "9";
  }
}
function tonumber(num){
  if (num=="0") {
    return 0;
  }
  if (num=="1") {
    return 1;
  }
  if (num=="2") {
    return 2;
  }
  if (num=="3") {
    return 3;
  }
  if (num=="4") {
    return 4;
  }
  if (num=="5") {
    return 5;
  }
  if (num=="6") {
    return 6;
  }
  if (num=="7") {
    return 7;
  }
  if (num=="8") {
    return 8;
  }
  if (num=="9") {
    return 9;
  }
}
function isCNPJ(campo) {
    CNPJ = Limpar(campo,"0123456789");
// considera-se erro CNPJ's formados por uma sequencia de numeros iguais
    if (CNPJ == "00000000000000" || CNPJ == "11111111111111" ||
        CNPJ == "22222222222222" || CNPJ == "33333333333333" ||
        CNPJ == "44444444444444" || CNPJ == "55555555555555" ||
        CNPJ == "66666666666666" || CNPJ == "77777777777777" ||
        CNPJ == "88888888888888" || CNPJ == "99999999999999" ||
       CNPJ.length != 14)
       return false;

      var dig13, dig14;
      var sm, i, r, num, peso;
      sm = 0;
      peso = 2;
      for (i=11; i>=0; i--) {
        num = tonumber(CNPJ.substr(i,1));
        sm = sm + (num * peso);
        peso = peso + 1;
        if (peso == 10)
           peso = 2;
      }

      r = sm % 11;
      if ((r == 0) || (r == 1))
         dig13 = "0";
      else dig13 = toChar(11-r);

// Calculo do 2o. Digito Verificador
      sm = 0;
      peso = 2;
      for (i=12; i>=0; i--) {
        num = tonumber(CNPJ.substr(i,1));
        sm = sm + (num * peso);
        peso = peso + 1;
        if (peso == 10)
           peso = 2;
      }

      r = sm % 11;
      if ((r == 0) || (r == 1))
        dig14 = "0";
      else 
        dig14 = toChar(11-r);

// Verifica se os dígitos calculados conferem com os dígitos informados.
      if ((dig13 == CNPJ.substr(12,1)) && (dig14 == CNPJ.substr(13,1)))
        return true;
      else 
        return false;
  }