(function(){
    var items = {
        name : "Banana",
        onFloor : 20,
        onFloorMax: 35,
        neededQuantity : function(){
            return this.onFloorMax - this.onFloor;
        }
    };
    document.getElementById('bananas').textContent = items.neededQuantity();
    } ());
    