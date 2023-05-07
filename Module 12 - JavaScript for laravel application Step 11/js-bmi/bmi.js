// CHANGE BMI MEASURING SYSTEM
function measureBMI () {
  // GET HTML ELEMENTS
  let unit = document.getElementById("bmi-metric").checked,
      weight = document.getElementById("weightInput"),
      weightu = document.getElementById("bmi-weight-unit"),
      height = document.getElementById("heightInput"),
      heightu = document.getElementById("bmi-height-unit");

  // UPDATE HTML FORM FIELDS
  // TRUE = METRIC, FALSE = IMPERIAL
  if (unit) {
    weightu.innerHTML = "KG";
    weight.min = 1; weight.max = 635;
    heightu.innerHTML = "CM";
    height.min = 54; height.max = 272;
  } else {
    weightu.innerHTML = "LBS";
    weight.min = 2; weight.max = 1400;
    heightu.innerHTML = "IN";
    height.min = 21; height.max = 107;
  }
}

// CALCULATE BMI
function calculateBMI () {
  // GET HTML ELEMENTS
  let bmi = null,
      unit = document.getElementById("bmi-metric").checked,
      weight = parseInt(document.getElementById("weightInput").value),
      height = parseInt(document.getElementById("heightInput").value),
      results = document.getElementById("bmi-results");
      results.style.display = "block"

  // CALCULATE BMI
  // METRIC BMI = MASS (KG) / HEIGHT (M) SQUARE
  if (unit) {
    height = height / 100;
    bmi = weight / (height * height);
  }
  // IMPERIAL BMI = 703 X MASS (LBS) / HEIGHT (IN) SQUARE
  else {
    bmi = 703 * (weight / (height * height));
  }
  // ROUND OFF - 2 DECIMAL PLACES
  bmi = Math.round(bmi * 100) / 100;

  // SHOW RESULTS
  if (bmi < 18.5) {
    results.innerHTML = bmi + " kg/m<sup>2</sup> (<span style='color:blue;'>Underweight</span>) ";
  } else if (bmi < 25) {
    results.innerHTML = bmi + " kg/m<sup>2</sup> (<span style='color:green;'>Normal weight</span>) ";
  } else if (bmi < 30) {
    results.innerHTML = bmi + " kg/m<sup>2</sup> (<span style='color:orange;'>Pre-obesity</span>) ";
  } else if (bmi < 35) {
    results.innerHTML = bmi + " kg/m<sup>2</sup> (<span style='color:red;'>Obesity class I</span>) ";
  } else if (bmi < 40) {
    results.innerHTML = bmi + " kg/m<sup>2</sup> (<span style='color:red;'>Obesity class II</span>) ";
  } else {
    results.innerHTML = bmi + " kg/m<sup>2</sup> (<span style='color:red;'>Obesity class III</span>) ";
  }
  return false;
}