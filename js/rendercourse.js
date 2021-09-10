const courseData = {
    name: 'HTML',
    resources: [
        {
            name: 'Lecture 1',
            category: 'short',
        },
        {
            name: 'Lecture 2',
            category: 'long',
        },
        {
            name: 'Lecture 3',
            category: 'medium',
        },
        {
            name: 'Lecture 4',
            category: 'short',
        },
        {
            name: 'Lecture 5',
            category: 'long',
        },
        {
            name: 'Lecture 6',
            category: 'long',
        },
    ],
};

var section = document.getElementById('course');


function filterResources(filter) {
    section.innerHTML = courseData.resources
        .filter((r) => r.category == filter)
        .map((resource) => {
            return `<span>${resource.name} | ${resource.category}</span>`;
        })
        .join('');
}

filterResources('long');

function runFilter(e){
    filterResources(e.target.value);
}

document.getElementById("filter").addEventListener("change", runFilter);
