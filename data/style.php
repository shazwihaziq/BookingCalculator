<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #fff8e1;
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        height: 100vh;
        padding: 20px;
    }

    .header-container {
        width: 100%;
        text-align: center;
        padding: 20px 0;
        border-bottom: 1px solid #ccc;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #03a9f4;
        font-family: 'Recursive', sans-serif;
    }

    .form-container {
        max-width: 400px;
        margin: 20px auto;
        background-color: #fff;
        border-radius: 8px;
        padding: 30px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    p {
        text-align: center;
        margin-bottom: 10px;
    }

    .back-btn {
        width: 100%;
        padding: 12px;
        background-color: #fff8e1;
        color: #03a9f4;
        border: #faf2cc;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
        text-decoration: none;
        text-align: center;
    }

    .back-btn:hover {
        background-color: #faf2cc;
    }

    .box {
        margin-bottom: 20px;
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    box-sizing: border-box; /* Ensures padding and border are included in the element's total width */
    }

    input[type="number"]:focus {
    outline: none;
    border-color: #03a9f4;
    }

    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        color: #333;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background-repeat: no-repeat;
        background-position: right 10px top 50%;
        background-color: #fff;
    }

    select:focus {
        outline: none;
        border-color: #03a9f4;
    }

    .submit-btn,
    .clear-btn {
        width: 100%;
        padding: 12px;
        background-color: #fff8e1;
        color: #03a9f4;
        border: #faf2cc;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .submit-btn:hover,
    .clear-btn:hover {
        background-color: #faf2cc;
    }

    .footer-container {
        margin-top: 20px;
        text-align: center;
        font-weight: bold;
    }

    #header {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        background-color: #03a9f4;
        display: flex;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #ccc;
        box-sizing: border-box;
    }

    #header img {
        height: 40px;
        margin-right: 10px;
    }

    #header h1 {
        text-align: center;
        color: white;
        font-family: 'Recursive', sans-serif;
        font-weight: bold;
        margin: 0;
    }

    #footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #03a9f4;
        color: white;
        text-align: center;
        font-weight: bold;
        padding: 10px 0;
        box-sizing: border-box; /* Ensure padding is included in width calculation */
    }
</style>