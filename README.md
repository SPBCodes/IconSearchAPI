# IconSearchAPI
Client side scripts for the [formstrap](https://formstrap.com) [Icon Search API](https://formstrap.com/IconSearchAPI)

The scripts in this repository are simple, example scripts for accessing the API. They allow you to build search for Bootstrap icons into your application. The API was created to facilitate user-selection of icons for Bootstrap style input-group addons in the formstrap forms WYSIWYG editor.

The services allows you to run searches against icon names, categories and tags. Multi-term full text boolean searching is supported. There is also support for wildcards. 

To see the API in practice, [visit the website](https://formstrap.com/IconSearchAPI)

The data is returned as a JSON file with the following format. This example has just one search result.
```
{
	"responseCode": 200,
	"responseVerbose": "OK",
	"search": "\"vector pen\"",
	"matches": 1,
	"icons": [
		{
			"Title": "Vector pen",
			"Category": "Graphics",
			"Class": "bi bi-vector-pen",
			"Tags": [
				"graphics",
				"pen",
				"vector"
			],
			"CodePoint": "f604",
			"HTML": "<i alt="Vector pen icon" class="bi bi-vector-pen"></i>",
			"SVG": "<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vector-pen" viewBox="0 0 16 16">\n  <path fill-rule="evenodd" d="M10.646.646a.5.5 0 0 1 .708 0l4 4a.5.5 0 0 1 0 .708l-1.902 1.902-.829 3.313a1.5 1.5 0 0 1-1.024 1.073L1.254 14.746 4.358 4.4A1.5 1.5 0 0 1 5.43 3.377l3.313-.828zm-1.8 2.908-3.173.793a.5.5 0 0 0-.358.342l-2.57 8.565 8.567-2.57a.5.5 0 0 0 .34-.357l.794-3.174-3.6-3.6z"/>\n  <path fill-rule="evenodd" d="M2.832 13.228 8 9a1 1 0 1 0-1-1l-4.228 5.168-.026.086z"/>\n</svg>"
		}
	],
	"dateTime": "2025-02-10T17:10:03+00:00",
	"remoteAddr": "2a02:c7c:ac78:6300:c1bb:41bf:5710:dc15",
	"rate": 15,
	"rateBeforeWindow": 0,
	"rateWindowOpen": "2025-02-10T16:45:15+00:00",
	"rateWindowClose": "2025-02-10T17:45:15+00:00"
}```
