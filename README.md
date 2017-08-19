# Probo Bitbucket Configuration Generator (pbbcg)

The purpose of this code is to act as a helper application for configuring the open source component of ProboCI's Bitbucket handler. 

It assists in the creation of the access and refresh tokens needed for Probo to interact with Bitbucket's repositories and pull code for processing. To begin using this code, you will need to install it on a web-accessible server. When configuring your OAuth application in Bitbucket as per the Probo Bitbucket handler setup instructions, you will want to use the URL to this application as the callback URL.

Once that is completed, follow the on-screen instructions to obtain the configuration options that go into your probo-bitbucket-handler YAML file. This is a simple copy and paste job. No information is stored in cookies, sessions, or on any web server for security purposes.