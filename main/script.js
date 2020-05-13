const correct = (x) => {
        var ind = document.getElementById(x);
        var classis = ".omg" + x;
        var round = document.querySelector(classis);

        if (ind.classList == "unchecked") {
            ind.style.textDecoration = "line-through";
            ind.classList = "checked";
            round.classList = "omg" + x + " fa fa-check-circle";
        } else {
            ind.style.textDecoration = "none";
            ind.classList = "unchecked";
            round.classList = "omg" + x + " fa fa-circle-thin";
        }

    }
    /*const edit = (x) => {
        var ind = document.getElementById(x);
        ind.contentEditable = true;

    }
    const edited = (x) => {
        var ind = document.getElementById(x);
        ind.contentEditable = false;
        var updatedinfo = document.getElementById(x).innerHTML;


    }*/
