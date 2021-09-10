var section = document.getElementById('course');

function filterResources(filter) {
    var filtered = courseData.resources;
    if (filter != "all")
        var filtered = courseData.resources.filter((r) => r.category == filter);

    section.innerHTML = filtered.map((resource) => {
            return `<div class="card"><iframe src="https://www.youtube.com/embed/${resource.yt}"></iframe><div class="col"><h1>${resource.name} | ${resource.duration}</h1><p>${resource.desc}</p></div></div>`;
        })
        .join('');
}

filterResources('all');

function runFilter(e) {
    filterResources(e.target.value);
}

document.getElementById('filter').addEventListener('change', runFilter);
