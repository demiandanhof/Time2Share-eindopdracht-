window.onload = () =>{
    const category_dropdown = document.getElementById("category");
    const weeks_dropdown = document.getElementById("weeks");
    const searchbar = document.getElementById("js--searchbar");
    const searchbar2 = document.getElementById("js--searchbar2");

    category_dropdown.addEventListener('change', function(){
        filter();
    });

    weeks_dropdown.addEventListener('change', function(){
        filter();
    });

    searchbar.onkeyup = (event) => {
        search(event);
    }

    searchbar2.onkeyup = (event) => {
        search(event);
    }
}

search = (event) =>{
    const all_products = document.getElementsByClassName("productCard--wrapper");
    let filter = event.target.value.toUpperCase();
    for(let i = 0; i < all_products.length; i++){
      let innerHTML = all_products[i].innerHTML.toUpperCase();
  
      if(innerHTML.indexOf(filter) !== -1){
            all_products[i].style.display = ""; //Zichtbaar
        }
  
      else{
            all_products[i].style.display = "none"; //Onzichtbaar
        }
      }
}

filter = () =>{
    const all_products = document.getElementsByClassName("productCard--wrapper");
    const category_dropdown = document.getElementById("category");
    const weeks_dropdown = document.getElementById("weeks");
    weekFilterValue = weeks_dropdown.value;
    catergorieFilterValue = category_dropdown.value;

    console.log(weekFilterValue);
    console.log(catergorieFilterValue);

    if(weekFilterValue == "Alle weken"){
        for(let i = 0; i < all_products.length; i++){
            if (all_products[i].dataset.productCategory != category_dropdown.value){
                all_products[i].style.display = 'none';
            }
            else{
                all_products[i].style.display = '';
            }
        }
    }
    else if(catergorieFilterValue == "Alle categorieën"){
        for(let i = 0; i < all_products.length; i++){
            if (all_products[i].dataset.productWeeks != weeks_dropdown.value){
                all_products[i].style.display = 'none';
            }
            else{
                all_products[i].style.display = '';
            }
        }
    }
    else{
        for(let i = 0; i < all_products.length; i++){
            if (all_products[i].dataset.productWeeks == weeks_dropdown.value && all_products[i].dataset.productCategory == category_dropdown.value){
                all_products[i].style.display = '';
            }
            else{
                all_products[i].style.display = 'none';
            }
        }
    }
    if(catergorieFilterValue === "Alle categorieën" && weekFilterValue === "Alle weken"){
        console.log('alles');
        for(let i = 0; i < all_products.length; i++){
            all_products[i].style.display = '';
        }
    }
}


