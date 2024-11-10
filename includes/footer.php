<footer class="footer">
    <div class="container text-center">
        <span class="text-muted">
            <b>Copyright&copy; Planet Shopify | All Rights Reserved | Contact Us: +91 90000 00000</b>
        </span>
        <div id="quote-container" class="quote-container">
            <?php
            // Function to fetch quotes from API
            function fetchQuotes() {
                $url = "https://api.api-ninjas.com/v1/quotes?category=funny"; // Adjust category if necessary
                $api_key = "I28RARkR8OySqtOToUp/Tg==36XWsn3KMNv5EVjo"; // Replace with your actual API key

                $options = [
                    "http" => [
                        "header" => "X-Api-Key: $api_key\r\n"
                    ]
                ];
                $context = stream_context_create($options);
                $response = file_get_contents($url, false, $context);

                if ($response === FALSE) {
                    return "No quotes available at the moment.";
                }

                $quotes = json_decode($response, true);
                if (isset($quotes[0]['quote'])) {
                    return $quotes[0]['quote'] . " - <strong>" . $quotes[0]['author'] . "</strong>";
                } else {
                    return "No quotes available at the moment.";
                }
            }

            // Fetch and display a quote
            //echo "<p class='quote'><i>" . fetchQuotes() . "</i></p>";
            echo "<p class='quote'><i>" . "quotes" . "</i></p>";
            ?>
        </div>
    </div>
</footer>

<style>
    .footer {
        background-color: #f8f9fa; /* Light background color */
        padding: 20px 0; /* Padding for top and bottom */
        border-top: 1px solid #dee2e6; /* Subtle border at the top */
    }

    .quote-container {
        margin-top: 15px; /* Space between copyright and quote */
        padding: 15px; /* Padding around the quote */
        border: 1px solid #007bff; /* Border around the quote */
        border-radius: 5px; /* Rounded corners */
        background-color: #e9ecef; /* Slightly darker background for the quote */
    }

    .quote {
        font-size: 1.2em; /* Larger font size for the quote */
        color: #343a40; /* Darker text color */
        font-style: italic; /* Italic style for the quote */
        margin: 0; /* Remove default margin */
    }

    .text-muted {
        color: #6c757d; /* Muted text color */
    }

    @media (max-width: 768px) {
        .quote {
            font-size: 1em; /* Responsive font size for smaller screens */
        }
    }
</style>