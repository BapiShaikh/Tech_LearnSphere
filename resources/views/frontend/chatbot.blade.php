<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Chatbot</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{'frontend/css/chatbot.css'}}">
    <script src="{{'frontend/js/chatbot.js'}}"></script>
</head>
<body>
    <!-- Chatbot Button -->
    <button type="button" class="btn btn-primary btn-1" data-toggle="modal" data-target="#chatbotModal">
        <img src="{{url('frontend/images/Google_Messages_logo.svg')}}" alt="" height="40" width="30">
    </button>

    <!-- Chatbot Modal -->
    <div class="modal fade" id="chatbotModal" tabindex="-1" aria-labelledby="chatbotModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chatbotModalLabel">Chat Support</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="chatbox">
                        <div id="messages"></div>
                    </div>
                    <input type="text" id="userInput" class="form-control" placeholder="Type a message...">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" onclick="sendMessage()">Send</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
