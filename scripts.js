(function(){
    var addBtnHTML = document.getElementById('sb_Add');   
    var addPopupHTML = document.getElementById('popupAdd');
    addBtnHTML.addEventListener('click',clickAdd,false);
    
    
    
    function clickAdd(e){
        addPopupHTML.classList.toggle('hidden');
    }
    
}());