const app= new (function(){
    this.tbody= document.getElementById('tbody');
    this.listar_cancha=()=> {
        fetch("../controller/listar_cancha.php")
        .then(res=>res.json())
        .then((data)=>{
            console.log(data);
        })
        .catch((error)=> console.log(error));

    }
})