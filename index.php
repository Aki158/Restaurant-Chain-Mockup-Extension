<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Restaurant Cahin</title>
</head>
<body>
    <form action="download.php" method="post">
        <h1>Input form</h1>

        <!-- チェーンが持つ従業員の数を選択 -->
        <label for="countEmployee">Number of Employees:</label><br><br>
        <input type="number" id="countEmployee" name="countEmployee" min="1" max="100" value="5"><br><br>

        <!-- 従業員の給与範囲を選択 -->
        <label for="salary">salary:</label><br><br>
        <select name="salary">
            <option value="1000">$1,000 〜 $1,999</option>
            <option value="2000">$2,000 〜 $2,999</option>
            <option value="3000">$3,000 〜 $3,999</option>
            <option value="4000">$4,000 〜 $4,999</option>
        </select><br><br>

        <!-- 場所の数を入力 -->
        <label for="countRestaurantLocation">Number of RestaurantLocations:</label><br><br>
        <input type="number" id="countRestaurantLocation" name="countRestaurantLocation" min="1" max="10" value="5"><br><br>

        <!-- 場所の郵便番号の範囲を設定 -->
        <label for="postalCodeMin">Minimum postal code:</label><br><br>
        <input type="text" id="postalCodeMin" name="postalCodeMin" pattern="[0-9]{3}-[0-9]{4}" placeholder="123-4567" required><br><br>

        <label for="postalCodeMax">Maximum postal code:</label><br><br>
        <input type="text" id="postalCodeMax" name="postalCodeMax" pattern="[0-9]{3}-[0-9]{4}" placeholder="123-4567" required><br><br>
        
        <!-- ダウンロードするフォーマットを設定 -->
        <label for="format">Download Format:</label><br><br>
        <select id="format" name="format">
            <option value="html">HTML</option>
            <option value="md">Markdown</option>
            <option value="json">JSON</option>
            <option value="txt">Text</option>
        </select><br><br>

        <p>↓click the button</p>
        <button type="submit">Generate</button>
    </form>
</body>
</html>