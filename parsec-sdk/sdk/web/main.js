/*** API Parsec ***/

async function auth(email, password, tfa) {
	const res = await fetch(`https://kessel-api.parsecgaming.com/v1/auth`, {
		method: 'post',
		headers: {
			'Content-Type': 'application/json; charset=utf-8',
		},
		body: JSON.stringify({
			email,
			password,
		}),
	});

	return await res.json();
}

async function serverList(sessionId) {
	const res = await fetch(`https://kessel-api.parsecgaming.com/hosts/`, {
		method: 'get',
		headers: {
			'Authorization': 'Bearer ' + sessionId,
		},
	});

	return await res.json();
}


//Get host list


/*** UI & PARSEC CLIENT ***/

async function serverTable(sessionId) {
	var machine_name = sessionStorage.getItem("machine_name");
	const json = await serverList(sessionId);
	const table = _('#server-list');
	console.log(json);
	console.log(machine_name);

	//Pour tous les server de json, faire ceci :
	for (const server of json.data) {
		//Vérifier si nom de machine = nom de machine spécifié dans la DB
		if (server.name == machine_name) {
			const tr = addRow(table);
			addTextCol(tr, server.name);
			//addTextCol(tr, server.peer_id);
			//addTextCol(tr, server.user_name);

			//addButtonCol(tr, 'Utiliser cet appareil', async () => {
				const container = _('.video-container');
				container.style.display = 'block';
				table.style.display = 'none';

			// Parsec instance and client connection
				const parsec = new Parsec(_('video'), _('audio'), container);
				parsec.handleInput(parsec.Input.All);

				parsec.clientConnect(sessionId, server.peer_id, '');

			// Client status polling interval
				const interval = setInterval(() => {
					const status = parsec.clientGetStatus();
					console.log("Interval 1 : Get status");

					if (status != parsec.Status.PARSEC_CONNECTING && status != parsec.Status.PARSEC_OK) {
						console.log("Interval 2 : déconnexion");
						parsec.clientDisconnect();
						parsec.destroy();

						table.style.display = 'table';
						container.style.display = '';

						if (status !== 0)
							alert(`Exit code: ${status}`);
							console.log("Interval 3 : Exit code");

						clearInterval(interval);
					}
				}, 30000);
			//});
		}
	}

	const tr = addRow(table);
}

async function submit() {
	try {
		const email = (parsec_mail); //REMPLACER EMAIL PAR EMAIL PARSEC
		const password = (parsec_password); //IDEM POUR PASSWORD

		const json = await auth(email, password);

		if (json.session_id) {
			localStorage.sessionId = json.session_id;
		} else {
			console.log(json);
		}
	} catch (e) {
		console.log(e);
	}
}

function _(selector) {
	return document.querySelector(selector);
}

function addRow(table) {
	const tr = document.createElement('tr');
	table.appendChild(tr);
	return tr;
}

function addTextCol(tr, text) {
	const td = document.createElement('td');
	td.textContent = text;
	tr.appendChild(td);
}

function addButtonCol(tr, text, onclick) {
	const td = document.createElement('td');
	tr.appendChild(td);

	const button = document.createElement('button');
	button.textContent = text;
	button.onclick = onclick;
	td.appendChild(button);
}

function addButtonRedirect(tr, text, onclick) {
	const td = document.createElement('td');
	tr.appendChild(td);

	const button = document.createElement('button');
	button.textContent = text;
	button.onclick = onclick;
	td.appendChild(button);
}

function UI() {
		console.log("Connexion à Parsec via l'API");
		submit();

	if (!localStorage.sessionId) {
		_('#server-list').style.display = 'none';
		_('#auth').style.display = 'table';

	} else {
		_('#auth').style.display = 'none';
		_('#server-list').style.display = 'table';
		serverTable(localStorage.sessionId);
	}
}
