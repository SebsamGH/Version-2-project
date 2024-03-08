Your main outcome is to have a working docker image deployed on AWS and running on Fargate.
​
📂

 Project Files
 
Create a second HTML file named "index.html" inside the "version2" folder with some additional functionality. Our file has a form that sends a POST request to a php file for processing.

Create a php file (server-side scripting) to process the inputs when we submit the form. Because we will use php, we will need to set up a Docker file that can create a web server and php-enabled image. 

  Build a second custom docker image
  
Using an online terminal or local. Ensure you are able to access your project files

Run the build commands

Ensure you can see your new custom image (docker images)

Run the Image to confirm it works

 Push to AWS
 
Create an Amazon ECS cluster 

Upload/ Push your Image to AWS ECR (like docker hub). 

Create a public repo 

Open the repo 

Click on “view push commands” to see how to push to ECR. *Give your repo the same name to simplify things. E.g., docker-web-app. 
You will need AWS CLI installed 

Run AWS configure: You will need an IAM user (access keys & secret keys 

Go ahead with the commands from AWS. You might need to add an ECR policy for users to run the first command. 

  Set up an Amazon ECS task definition with Fargate launch type and specify the Docker image you just created as the container image for the task definition. (Get the Uri from the repo) 
  
 Launch a new Fargate task using the task definition you just created.  
 
 (Wait for 5-10 min until everything is running) Access the web app by going to the Fargate task's public IP address. 
