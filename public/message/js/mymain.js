var mydiv= document.getElementById('med');
var num = mydiv.childElementCount;
console.log(num);
var i=0;
for( i=0 ; i<num;  i++){
    if ((i%2)!=0){
  mydiv.children[i].className='messageleft'
    }
    else{
      mydiv.children[i].className='message'
    }
  }