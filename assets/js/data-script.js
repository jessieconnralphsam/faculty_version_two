function formatSpecializations(inputString) {
    const specializationsArray = inputString.split(';');
    const formattedSpecializations = specializationsArray.join(', ');
    return formattedSpecializations;
}
function capitalizeFirstLetter(string) {
    var words = string.split(' ');
    var capitalizedWords = words.map(function(word) {
        return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
    });
    return capitalizedWords.join(' ');
}