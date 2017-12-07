function forEach(arr, callFunct){
    for(var x = 0; x < arr.length; x++){
        callFunct(arr[x]);
    }
};