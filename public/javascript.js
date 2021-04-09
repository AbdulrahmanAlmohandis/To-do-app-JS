function isPlus(){
    if(document.getElementById('header-add-button').value == "+"){
        return true
    }else{
        return false
    }
}
document.addEventListener('DOMContentLoaded',(event)=>{
    document.getElementById('header-add-button').addEventListener('click',(event)=>{
        if(isPlus()){
            document.getElementsByClassName('add-section')[0].classList.toggle('add-sectionTrans');
            document.getElementById('add-section-textbox').autofocus = true;
            document.getElementById('header-add-button').value = "-";
        }else{
            document.getElementsByClassName('add-section')[0].classList.toggle('add-sectionTrans');
            document.getElementById('header-add-button').value = "+";
        }
    })
})
