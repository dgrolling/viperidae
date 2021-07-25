## Background
This website was developed as a means to provide myself and anyone who is interested with a streamlined site for Sugarloaf Mountain in Frederick County, Maryland. As an avid hiker and a rock climber, I am always on the lookout for resources to use when I’m going on a trip for the day or weekend. There are many websites, books, mobile phone applications out there that offer information that’s readily and usually reliable. Sugarloaf Mountain is situated less than an hour from the capital beltway and has some of the things that I really enjoy, climbing, hiking, and wine. Before designing this project, I conducted a brief user needs assessment of various resources and found that one site focused on climbing, another site targeted the Sugarloaf Vineyard, and so on. 

I wanted to pursue a website that targets, not just climbers, or hikers, but anyone who enjoys exploring new areas or just likes being outside away from cars, buildings, and city life. For this courses’ final project, I built a site that provides a tool to those searching for activities beyond those advertised on sites like sugarloaf.com, hikingupward.com, or mountainproject.com, as well as in books. 

## Data Description
Before commencing work on my final project, I originally anticipated on pulling data in from rock climbing and hiking sources. Upon further research, I discovered that the Sugarloaf Vineyard website has many awards listed for their wines. I decided to use the data on their website and combine it into a database to query from. On another page, I decided to build a query from rock climbing data from a local guidebook.

I built a database of climbing data in the form of climbing routes, with appropriate descriptive data generated primarily from the guidebook, Rockclimbing Virginia, West Virginia, and Maryland by Eric J. Horst. This portion of my website covers the section on Sugarloaf Mountain climbing and its 27 routes and descriptions. These data are structured in a clear manner and expected variables would include location, rating, route name, and route description. A brief description of the data is listed in the table below:
	
For my second database that a user can query from on my website, I decided to use the wine awards listed on the Sugarloaf Vineyard website. In a similar fashion of the climbing routes database query, the wine query allows a user to query and retrieve information related to awards.

Both data sets were created by hand typing the data and appropriate fields from their respective sources into a Microsoft Excel comma separated file. For ease of import, I then converted these two CSV files into Open Document Spreadsheet files to be imported smoothly into phpMyAdmin to create the databases. All variables across both sets were of the VARCHAR type with the exception of the ‘year’ variable in the winery database and ‘length’ in the climbing database.

![alt text](http://url/to/img.png)
