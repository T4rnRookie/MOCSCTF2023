docker build -t signin:v1 .
docker run --name signin -8032 -8080 $1:$2 signin:v1