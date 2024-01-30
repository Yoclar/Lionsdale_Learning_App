//toggle
document.getElementById('toggleSidebar').addEventListener('click', function(){
    document.getElementById('sidebar').style.width=document.getElementById('sidebar').style.width === '250px' ? '0' : '250px';

})
//close
document.addEventListener('click', function(event){
    if(event.target.id !== 'toggleSidebar' && event.target.closest('#sidebar') === null){
        document.getElementById('sidebar').style.width = '0';
    }
})
