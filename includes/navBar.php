<!--Creating Nav Bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Today</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tools
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="calculator.html" target=_blank>Calculator</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Gpa.Html" target=_blank>GPA Calculator</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Calendar.html" target=_blank>Calendar</a>
                <a class="dropdown-item" href="#"></a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" target=_blank>Grades</a>
            </li>
          </ul>
          

          <script>
            //GOOGLE SEARCH
            //Enter domain of site to search
            var domainroot=""
            function Gsitesearch(curobj){
            curobj.q.value=""+domainroot+" "+curobj.qfront.value
            }
            </script>
            <form class="search" action="https://duckduckgo.com" method="get" onSubmit="Gsitesearch(this)">
            <input name="q" type="hidden" />
            <input name="qfront" type="search" required class="searchField" placeholder="DuckDuckGo Search" maxlength="55"/>
            <input type="submit" class="search-button" value="SEARCH" />
            </form>
        </div>
      </nav>