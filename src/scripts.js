export function buttonFetchRate_onClick(event) {

  var url = 'https://api.fixer.io/latest?base=USD';

  var symbol = $w("#textInputSymbol").value; 

  var fullUrl = url + '&symbols=' + symbol; 
 

  fetch(fullUrl, {method: 'get'})

    .then(response => response.json())

    .then(json => $w("#textRate").text = json.rates[symbol].toString());

    //Add your code for this event here: 

}