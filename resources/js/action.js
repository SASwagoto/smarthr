

//icon toggle
const iconToggle = (icon1, icon2) => {
    icon1.classList.toggle('display-none');
    icon2.classList.toggle('display-none');
};


//full screen 
const expandBtn = document.querySelector('.expdBtn');
const compressdBtn = document.querySelector('.compBtn');

expandBtn.addEventListener('click', function(){
    document.documentElement.requestFullscreen();
    iconToggle(expandBtn, compressdBtn);
});
compressdBtn.addEventListener('click', function(){
    document.exitFullscreen();
    iconToggle(expandBtn, compressdBtn);
});

//Darkmode Enable
// Icons
const sunIcon = document.querySelector('.sun');
const moonIcon = document.querySelector('.moon');

// Theme variables
const userTheme = localStorage.getItem('theme');
const systemTheme = window.matchMedia('(prefers-color-scheme: dark)').matches;

// Initial theme check
const themeCheck = () => {
    if (userTheme === 'dark' || (!userTheme && systemTheme)) {
        document.documentElement.classList.add('dark');
        moonIcon.classList.add('display-none');
        return;
    }
    sunIcon.classList.add('display-none');
};

// Manual theme switch
const themeSwitch = () => {
    if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
    } else {
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    }
    iconToggle(sunIcon, moonIcon);
};

// Event listeners
sunIcon.addEventListener('click', themeSwitch);
moonIcon.addEventListener('click', themeSwitch);

// Invoke theme check on load
themeCheck();


//Dropdown Js
const button = document.getElementById('dropdownInformationButton');
const dropdown = document.getElementById('dropdownInformation');

button.addEventListener('click', function () {
    dropdown.classList.toggle('hidden');
});

// Close the dropdown when clicking outside of it
document.addEventListener('click', function (event) {
    if (!button.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.classList.add('hidden');
    }
});



//Sidebar Toggle
const sidebarToggle = document.getElementById('toggleSidebar');
const sidebar = document.getElementById('sidebar');

sidebarToggle.addEventListener('click', ()=>{
    if(sidebar.classList.contains('w-80'))
    {
        sidebar.classList.remove('w-80');
        sidebar.classList.add('w-20');
    }else{
        sidebar.classList.add('w-80');
    }
});