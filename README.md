# Stock-Ticker-application

This is a jQuery-enabled web app that allows users to log in and view a "live" Stock Updates table using AJAX.

The “live” view is a Simplified Stock Ticker, which will periodically let the user know when there are more updates waiting for them, and then loads them when the message is clicked.

Tables in the Database:

• The stock prices are stored in a database table called "StockUpdates."

    StockId, StockName, CurrentPrice, and UpdateDateTime are the columns in this table.
    
• A database table for user information called "Users."

    UserName and Password are the columns in this table.
    
 Registration and Login:
 
    Users can create new accounts and log in once they have completed the registration process.
 
    Session management is used in every PHP programme to ensure that the user is signed in and authorised to perform what they're trying to do.
 
    When a user is not signed in, it will be impossible to load any page (including pages intended for Ajax calls) or conduct any operations.
 
Data Management

The following pages are included in the app:

    • A PHP page that displays a JSON-encoded representation of the database table's newest items.
    • A PHP web page that allows you to add new database records.
    • The most recent items in the stock ticker are displayed in descending order of date in this JavaScript app.
    • This app sends AJAX requests every few seconds to try and get new records.
    
