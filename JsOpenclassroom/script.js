/* var paragraph = document.getElementById('myP');
var first = paragraph.firstChild;
var next = first.nextSibling;

var last = paragraph.lastChild;
var previus=last.previousSibling;
var childrens = paragraph.childNodes;

alert(previus.data);
alert(last.firstChild.data);
alert(next.firstChild.data);


for(var i=0, c = childrens.length; i<c;i++){
    if(childrens[i].nodeType === Node.ELEMENT_NODE){
        alert(childrens[i].firstChild.data);
    }else{
        alert(childrens[i].data);
    }
} 

alert(first.nodeName.toLocaleLowerCase());
alert(last.nodeName.toLocaleLowerCase());

alert(first.data);
alert(last.firstChild.data); */ 

var divTP1 = document.createElement('div');
divTP1.id='divTp1';

var textNodes = [
    document.createTextNode('Le'),
];
