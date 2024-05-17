var points = 0;

function getPoint() {
    points += 1;
    document.getElementById('pointsT').innerText = 'your points: ' + points;
}