
var mytst = document.getElementsByTagName('tr');
var raw_num= mytst.length;
if (raw_num==1){
var new_ele = document.createElement('div');
document.body.appendChild(new_ele);
new_ele.innerHTML="there is no item press ADD key to add item ";
new_ele.style.textAlign='center';
new_ele.style.width='100%';
new_ele.style.marginTop='30px';
}
else if(raw_num>1) {
for(i=1;i<=raw_num;i++){
  var td=document.createElement('td');
  mytst[i].appendChild(td);
    var my_td=document.createElement('button');
    my_td.innerText="remove";
    td.appendChild(my_td);
    var mytd = document.createElement('button');
    mytd.innerText="edit";
    td.appendChild(mytd);
    
    

}
}

 