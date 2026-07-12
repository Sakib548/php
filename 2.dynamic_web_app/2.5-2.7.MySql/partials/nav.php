 <nav aria-label="Global">
          <ul class="flex items-center gap-6 text-sm">

           <li>
              <a
                class="<?=  $_SERVER['REQUEST_URI']==$basic_url? "bg-gray-500 text-white" : "text-gray-300";?>text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                href=<?=basic_url;  ?>
              >
                Home 
              </a>
            </li>
            <li>
              <a
                class="<?=  $_SERVER['REQUEST_URI']==$basic_url.'about.php'? "bg-gray-500 text-white" : "text-gray-300";?>text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                  href=<?=basic_url.'about';  ?>
              >
                About 
              </a>
            </li>

            <li>
              <a
                class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                href=<?=basic_url.'contact';  ?>
              >
                Careers
              </a>
            </li>

            <li>
              <a
                class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                href="#"
              >
                History
              </a>
            </li>

            <li>
              <a
                class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                href="#"
              >
                Services
              </a>
            </li>

            <li>
              <a
                class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                href="#"
              >
                Projects
              </a>
            </li>

            <li>
              <a
                class="text-gray-500 transition hover:text-gray-500/75 dark:text-white dark:hover:text-white/75"
                href="#"
              >
                Blog
              </a>
            </li>
          </ul>
        </nav>