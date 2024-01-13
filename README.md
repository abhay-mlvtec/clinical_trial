
# This is a demo project in Laravel
<p> It contain simple Form which check eligibility of Subject</p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<article class="markdown-body entry-content container-lg" itemprop="text">
<hr>
<h2 tabindex="-1" dir="auto"><a id="user-content-build" class="anchor" aria-hidden="true" tabindex="-1" href="#build"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path d="m7.775 3.275 1.25-1.25a3.5 3.5 0 1 1 4.95 4.95l-2.5 2.5a3.5 3.5 0 0 1-4.95 0 .751.751 0 0 1 .018-1.042.751.751 0 0 1 1.042-.018 1.998 1.998 0 0 0 2.83 0l2.5-2.5a2.002 2.002 0 0 0-2.83-2.83l-1.25 1.25a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042Zm-4.69 9.64a1.998 1.998 0 0 0 2.83 0l1.25-1.25a.751.751 0 0 1 1.042.018.751.751 0 0 1 .018 1.042l-1.25 1.25a3.5 3.5 0 1 1-4.95-4.95l2.5-2.5a3.5 3.5 0 0 1 4.95 0 .751.751 0 0 1-.018 1.042.751.751 0 0 1-1.042.018 1.998 1.998 0 0 0-2.83 0l-2.5 2.5a1.998 1.998 0 0 0 0 2.83Z"></path></svg></a>Build</h2>
<p dir="auto">You can  build the app by cloning the repository </p>
<ol>
<li>
<p><strong>Clone the <a href="https://github.com/abhay-mlvtec/clinical_trial.git" target="_blank"> Repository:</a></strong></p>
<ul>
<li>Open your terminal.</li>
<li>Navigate to the directory where you want to clone the project.</li>
<li>Run the following command:
<pre class="hljs-copy-wrapper" style="--hljs-theme-background: rgb(40, 44, 52);"><code class="language-bash hljs" data-highlighted="true">git <span class="hljs-built_in">clone</span> https://github.com/abhay-mlvtec/clinical_trial.git
</code></pre>
</li>
</ul>
</li>
<li>
<p><strong>Navigate to the Project Directory:</strong></p>
<ul>
<li>After cloning, navigate into the project directory:
<pre class="hljs-copy-wrapper" style="--hljs-theme-background: rgb(40, 44, 52);"><code class="language-bash hljs" data-highlighted="true"><span class="hljs-built_in">cd</span> repository-name
</code></pre>
</li>
</ul>
</li>
<li>
<p><strong>Install Composer Dependencies:</strong></p>
<ul>
<li>Ensure you have <a href="https://getcomposer.org/">Composer</a> installed on your system.</li>
<li>Run the following command to install PHP dependencies:
<pre class="hljs-copy-wrapper" style="--hljs-theme-background: rgb(40, 44, 52);"><code class="language-bash hljs" data-highlighted="true">composer install
</code></pre>
</li>
</ul>
</li>
<li>
<p><strong>Create a .env File:</strong></p>
<ul>
<li>Copy the <code>.env.example</code> file to a new <code>.env</code> file:
<pre class="hljs-copy-wrapper" style="--hljs-theme-background: rgb(40, 44, 52);"><code class="language-bash hljs" data-highlighted="true"><span class="hljs-built_in">cp</span> .env.example .<span class="hljs-built_in">env</span>
</code></pre>
</li>
<li>Modify the <code>.env</code> file to suit your environment (like database connection details).</li>
</ul>
</li>
<li>
<p><strong>Generate Application Key:</strong></p>
<ul>
<li>Run this command to generate an app key:
<pre class="hljs-copy-wrapper" style="--hljs-theme-background: rgb(40, 44, 52);"><code class="language-bash hljs" data-highlighted="true">php artisan key:generate
</code></pre>
</li>
</ul>
</li>
<li>
<p><strong>Run Migrations:</strong></p>
<ul>
<li>Run this command to create database using  migrations
<pre class="hljs-copy-wrapper" style="--hljs-theme-background: rgb(40, 44, 52);"><code class="language-bash hljs" data-highlighted="true">php artisan migrate
</code></pre>
</li>
</ul>
</li>
<p><strong>Start the Laravel Server:</strong></p>
<ul>
<li>Run the Laravel development server:
<pre class="hljs-copy-wrapper" style="--hljs-theme-background: rgb(40, 44, 52);"><code class="language-bash hljs" data-highlighted="true">php artisan serve
</code></pre>
</li>
<li>This will start the server, typically at <code>http://localhost:8000</code>.</li>
</ul>
</li>
<li>
<p><strong>Open the Project in Your Browser:</strong></p>
<ul>
<li>Open your web browser and go to the address where the Laravel server is running (usually <code>http://localhost:8000</code>).</li>
</ul>
</li>
</ol>
