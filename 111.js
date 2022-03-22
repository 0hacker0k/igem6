let A =[1, 2, 3];
let In=(3)[0];
var AA=0;
var BB=0;
var temp=0;
var tempp=0;

for( ; AA<3 ; ){
  AA=0;
  BB=0;
  temp=0;
  In=prompt("猜");
  
  for(var i=0 ; i<=2 ; i++){

    if(A[i]==In[i]){
      AA++;
      tempp=A[temp];
    }

    if(A[0]==In[i] && i!=0 && A[0]!=tempp){
      BB++;
    }

    if(A[1]==In[i] && i!=1 && A[1]!=tempp){
      BB++;
   }

    if(A[2]==In[i] && i!=2 && A[2]!=tempp){
      BB++;
   }
   temp++;
  }
  alert(+AA,'A');
  alert(+BB,'B');
  document.write(In);
  document.write(' ',AA,'A');
  document.write(' ',BB,'B<br>');
}
//alert(BB,'B');
