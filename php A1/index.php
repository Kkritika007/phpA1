<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Pizza Order Form</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link to your custom CSS file -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-danger">Create Your Perfect Pizza</h1>
        <form action="database.php" method="post">
            <div class="form-group">
                <label for="pizzaSize">Select Pizza Size:</label>
                <select class="form-control" id="pizzaSize" name="pizzaSize">
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                    <option value="extra-large">Extra Large</option>
                </select>
            </div>
            <div class="form-group">
                <label>Select Toppings (Maximum 4):</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="pepperoni" name="toppings[]" value="pepperoni">
                    <label class="form-check-label" for="pepperoni">Pepperoni</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="sausage" name="toppings[]" value="sausage">
                    <label class="form-check-label" for="sausage">Sausage</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="mushrooms" name="toppings[]" value="mushrooms">
                    <label class="form-check-label" for="mushrooms">Mushrooms</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="olives" name="toppings[]" value="olives">
                    <label class="form-check-label" for="olives">Olives</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="onions" name="toppings[]" value="onions">
                    <label class="form-check-label" for="onions">Onions</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="bellPeppers" name="toppings[]" value="bellPeppers">
                    <label class="form-check-label" for="bellPeppers">Bell Peppers</label>
                </div>
                <!-- Add more toppings here -->
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="bacon" name="toppings[]" value="bacon">
                    <label class="form-check-label" for="bacon">Bacon</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="chicken" name="toppings[]" value="chicken">
                    <label class="form-check-label" for="chicken">Chicken</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="peppers" name="toppings[]" value="peppers">
                    <label class="form-check-label" for="peppers">Hot Peppers</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="pineapple" name="toppings[]" value="pineapple">
                    <label class="form-check-label" for="pineapple">Pineapple</label>
                </div>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="1">
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <button type="submit" class="btn btn-danger btn-lg btn-block">Order Now</button>
        </form>
    </div>

    
</body>
</html>
