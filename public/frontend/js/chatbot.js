function sendMessage() {
    const userInput = document.getElementById('userInput');
    const message = userInput.value.trim();
    if (message) {
        const messagesDiv = document.getElementById('messages');
        const userMessage = document.createElement('div');
        userMessage.className = 'user-message';
        userMessage.textContent = message;
        messagesDiv.appendChild(userMessage);
        userInput.value = 'Bapi';

        const responses = [
            [["hi", "hey", "hello"], ["Hello!", "Hi!", "Hey!", "Hi there!"]],
            [["sure", "yes", "no"], ["Okay"]],
            [["are you genius", "are you nerd", "are you intelligent"], ["Yes I am!"]],
            [["i hate you", "i don't like you"], ["I'm sorry about that. But I like you dude."]],
            [["how are you", "how is life", "how are things", "how are you doing"], ["Fine... how are you?", "Pretty well, how are you?", "Fantastic, how are you?"]],
            [["how is corona", "how is covid 19", "how is covid19 situation"], ["Getting better. There?", "Somewhat okay!", "Yeah fine. Better stay home!"]],
            [["what are you doing", "what is going on", "what is up"], ["Nothing much", "About to go to sleep", "Can you guess?", "I don't know actually"]],
            [["how old are you"], ["I am always young."]],
            [["who are you", "are you human", "are you bot", "are you human or bot"], ["I am just a bot", "I am a bot. What are you?"]],
            [["who created you?", "who made you", "who is your creator"], ["Souparna and Bapi together"]],
            [["your name please", "your name", "may i know your name", "what is your name", "what call yourself"], ["I am nameless", "I don't have a name"]],
            [["i love you"], ["I love you too", "Me too"]],
            [["happy", "good", "fun", "wonderful", "fantastic", "cool", "very good"], ["Have you ever felt bad?", "Glad to hear it"]],
            [["bad", "bored", "tired"], ["Why?", "Why? You shouldn't!", "Try watching TV", "Chat with me."]],
            [["help me", "tell me story", "tell me joke"], ["What about?", "Once upon a time..."]],
            [["ah", "ok", "okay", "nice", "welcome"], ["Sorry for that. Let's chat!"]],
            [["thanks", "thank you"], ["You're welcome"]],
            [["what should i eat today"], ["Briyani", "Burger", "Sushi", "Pizza"]],
            [["bro"], ["Dude!"]],
            [["what", "why", "how", "where", "when"], ["Yes?"]],
            [["corona", "covid19", "coronavirus"], ["Please stay home"]],
            [["you are funny"], ["Glad to hear it"]],
            [["i dont know"], ["Say something interesting"]],
            [["boring"], ["Sorry for that. Let's chat!"]],
            [["i'm tired"], ["Take some rest, Dude!"]]
        ];

        // Find response for the user message
        let botResponse = "I don't understand. Let's chat!";
        for (const [userMessages, botMessages] of responses) {
            if (userMessages.includes(message.toLowerCase())) {
                botResponse = botMessages[Math.floor(Math.random() * botMessages.length)];
                break;
            }
        }

        // Simulate bot response (for demo purposes)
        setTimeout(() => {
            const botMessage = document.createElement('div');
            botMessage.className = 'bot-message';
            botMessage.textContent = botResponse;
            messagesDiv.appendChild(botMessage);
            messagesDiv.scrollTop = messagesDiv.scrollHeight;
        }, 1000);
    }
}
